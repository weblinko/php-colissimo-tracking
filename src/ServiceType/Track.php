<?php

namespace ColissimoTracking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track ServiceType
 * @subpackage Services
 */
class Track extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named track
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ColissimoTracking\StructType\Track $parameters
     * @return \ColissimoTracking\StructType\TrackResponse|bool
     */
    public function track(\ColissimoTracking\StructType\Track $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->track($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ColissimoTracking\StructType\TrackResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
