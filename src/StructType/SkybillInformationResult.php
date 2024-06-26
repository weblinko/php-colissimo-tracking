<?php

namespace ColissimoTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillInformationResult StructType
 * Meta information extracted from the WSDL
 * - type: tns:skybillInformationResult
 * @subpackage Structs
 */
class SkybillInformationResult extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * The eventCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventCode;
    /**
     * The eventDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventDate;
    /**
     * The eventLibelle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventLibelle;
    /**
     * The eventSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventSite;
    /**
     * The recipientCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientCity;
    /**
     * The recipientCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientCountryCode;
    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientZipCode;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
    /**
     * Constructor method for skybillInformationResult
     * @uses SkybillInformationResult::setErrorCode()
     * @uses SkybillInformationResult::setErrorMessage()
     * @uses SkybillInformationResult::setEventCode()
     * @uses SkybillInformationResult::setEventDate()
     * @uses SkybillInformationResult::setEventLibelle()
     * @uses SkybillInformationResult::setEventSite()
     * @uses SkybillInformationResult::setRecipientCity()
     * @uses SkybillInformationResult::setRecipientCountryCode()
     * @uses SkybillInformationResult::setRecipientZipCode()
     * @uses SkybillInformationResult::setSkybillNumber()
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $eventCode
     * @param string $eventDate
     * @param string $eventLibelle
     * @param string $eventSite
     * @param string $recipientCity
     * @param string $recipientCountryCode
     * @param string $recipientZipCode
     * @param string $skybillNumber
     */
    public function __construct($errorCode = null, $errorMessage = null, $eventCode = null, $eventDate = null, $eventLibelle = null, $eventSite = null, $recipientCity = null, $recipientCountryCode = null, $recipientZipCode = null, $skybillNumber = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setEventCode($eventCode)
            ->setEventDate($eventDate)
            ->setEventLibelle($eventLibelle)
            ->setEventSite($eventSite)
            ->setRecipientCity($recipientCity)
            ->setRecipientCountryCode($recipientCountryCode)
            ->setRecipientZipCode($recipientZipCode)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get eventCode value
     * @return string|null
     */
    public function getEventCode()
    {
        return $this->eventCode;
    }
    /**
     * Set eventCode value
     * @param string $eventCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventCode($eventCode = null)
    {
        // validation for constraint: string
        if (!is_null($eventCode) && !is_string($eventCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventCode, true), gettype($eventCode)), __LINE__);
        }
        $this->eventCode = $eventCode;
        return $this;
    }
    /**
     * Get eventDate value
     * @return string|null
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }
    /**
     * Set eventDate value
     * @param string $eventDate
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventDate($eventDate = null)
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventDate, true), gettype($eventDate)), __LINE__);
        }
        $this->eventDate = $eventDate;
        return $this;
    }
    /**
     * Get eventLibelle value
     * @return string|null
     */
    public function getEventLibelle()
    {
        return $this->eventLibelle;
    }
    /**
     * Set eventLibelle value
     * @param string $eventLibelle
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventLibelle($eventLibelle = null)
    {
        // validation for constraint: string
        if (!is_null($eventLibelle) && !is_string($eventLibelle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventLibelle, true), gettype($eventLibelle)), __LINE__);
        }
        $this->eventLibelle = $eventLibelle;
        return $this;
    }
    /**
     * Get eventSite value
     * @return string|null
     */
    public function getEventSite()
    {
        return $this->eventSite;
    }
    /**
     * Set eventSite value
     * @param string $eventSite
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventSite($eventSite = null)
    {
        // validation for constraint: string
        if (!is_null($eventSite) && !is_string($eventSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventSite, true), gettype($eventSite)), __LINE__);
        }
        $this->eventSite = $eventSite;
        return $this;
    }
    /**
     * Get recipientCity value
     * @return string|null
     */
    public function getRecipientCity()
    {
        return $this->recipientCity;
    }
    /**
     * Set recipientCity value
     * @param string $recipientCity
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setRecipientCity($recipientCity = null)
    {
        // validation for constraint: string
        if (!is_null($recipientCity) && !is_string($recipientCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCity, true), gettype($recipientCity)), __LINE__);
        }
        $this->recipientCity = $recipientCity;
        return $this;
    }
    /**
     * Get recipientCountryCode value
     * @return string|null
     */
    public function getRecipientCountryCode()
    {
        return $this->recipientCountryCode;
    }
    /**
     * Set recipientCountryCode value
     * @param string $recipientCountryCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setRecipientCountryCode($recipientCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($recipientCountryCode) && !is_string($recipientCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountryCode, true), gettype($recipientCountryCode)), __LINE__);
        }
        $this->recipientCountryCode = $recipientCountryCode;
        return $this;
    }
    /**
     * Get recipientZipCode value
     * @return string|null
     */
    public function getRecipientZipCode()
    {
        return $this->recipientZipCode;
    }
    /**
     * Set recipientZipCode value
     * @param string $recipientZipCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setRecipientZipCode($recipientZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($recipientZipCode) && !is_string($recipientZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientZipCode, true), gettype($recipientZipCode)), __LINE__);
        }
        $this->recipientZipCode = $recipientZipCode;
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber()
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setSkybillNumber($skybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        return $this;
    }
}
