<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use ColissimoTracking\ClassMap;
use ColissimoTracking\ServiceType\Track;

/**
 * Your Colissimo contract number
 */
define('COLISSIMO_WS_CONTRACT_NUMBER', '******');

/**
 * Your Colissimo password
 */
define('COLISSIMO_WS_PASSWORD', '************');

/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS/2.0?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);

/**
 * Example for Track ServiceType
 */
$track = new Track($options);

/**
 * Track
 */
$tracking = $track->track(new Track(
    COLISSIMO_WS_CONTRACT_NUMBER,
    COLISSIMO_WS_PASSWORD,
    '6A00000000000' // N° de tracking colissimo de la commande
));

/**
 * Result
 */
$result = $track->getResult();

if ($result !== false) {

    /**
     * Return
     */
    $return = $result->getReturn();

    /**
     *  ERROR CODES :
     *  ----------------
     *  0 Pas d’erreur
     *  101 Numéro de colis invalide
     *  103 Numéro de colis datant de plus de 30 jours
     *  104 Numéro de colis hors plage client
     *  105 Numéro de colis inconnu
     *  201 Identifiant / mot de passe invalide
     *  202 Service non autorisé pour cet identifiant
     *  1000 Erreur système (erreur technique)
     *  .....
     */
    if ($return->getErrorCode()) {
        $errorMessage = $return->getErrorMessage();

        /**
         * Has Error
         * Debug des informations fournies par les méthodes utilitaires
         */
        echo 'XML Request: ' . $track->getLastRequest() . "\r\n";
        echo 'XML Response: ' . $track->getLastResponse() . "\r\n";
        echo 'XML Error: ' . $track->getLastError() . "\r\n";

        return false;
    }

    /**
     *  EVENTS CODES : (Liste non exhaustive)
     *  ----------------
     *  COMCFM : Votre colis est prêt à être expédié, il va être remis à La Poste.
     *  TRACFM : Colis en transit dans un site postal.
     *  EXPCFM : Votre colis a quitté le pays d'origine.
     *  RSTFMA : Votre colis ne peut être livré ce jour en raison d'une situation exceptionnelle indépendante de notre volonté. Il sera remis en livraison au plus tôt.
     *  RENCAD : Votre colis ne peut actuellement être livré à son destinataire, l'adresse de livraison étant incomplète. Le destinataire peut contacter notre service clients pour apporter les compléments nécessaires.
     *  RENNRV : Votre colis n'a pas pu être livré car le destinataire était absent. Il sera remis en livraison le prochain jour ouvré.
     *  RSTNCG : Votre colis ne peut être livré ce jour. Il sera remis en livraison au plus tôt.
     *  RSTFHB : Votre colis ne peut être livré ce jour, l'accès à l'adresse de livraison étant impossible. Il sera remis en livraison au plus tôt.
     *  RENAVI : Votre colis n'a pas pu être livré, il sera mis à disposition dans le bureau de Poste du destinataire.
     *  RENARV : Votre colis n'a pu être livré. Le destinataire peut nous faire part de son choix de livraison aujourd'hui jusqu'à minuit.
     *  DEPGUI : Votre colis a été déposé dans un point postal.
     *  MLVARS : Votre colis est à disposition dans le point de retrait choisi dans le bureau de poste habituel. Il est à retirer pendant 15 jours sur présentation d'une pièce d'identité et de l'avis d'instance.
     *  MLVCFM : Votre colis est en préparation pour la livraison.
     *  PCHCFM : Votre colis est en cours d'acheminement.
     *  QDICFM : Votre colis sera présenté le prochain jour ouvré.
     *  AARCFM : Votre colis est arrivé sur son site de distribution.
     *  LIVVOI : Votre colis est livré au voisin indiqué sur l'avis déposé dans la boîte aux lettres du destinataire.
     *  LIVRTI : Votre colis a été livré au gardien ou à un voisin.
     *  LIVGAR : Votre colis a été livré au gardien.
     *  LIVCFM : Votre colis a été livré dans la boite aux lettres du destinataire.
     */
    $eventCode = $return->getEventCode();
    $eventDate = $return->getEventDate();
    $eventLibelle = $return->getEventLibelle();

    return true;
}