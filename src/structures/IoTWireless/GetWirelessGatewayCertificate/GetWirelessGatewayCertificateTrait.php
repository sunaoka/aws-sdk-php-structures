<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayCertificate;

trait GetWirelessGatewayCertificateTrait
{
    /**
     * @param GetWirelessGatewayCertificateRequest $args
     * @return GetWirelessGatewayCertificateResponse
     */
    public function getWirelessGatewayCertificate(GetWirelessGatewayCertificateRequest $args)
    {
        $result = parent::getWirelessGatewayCertificate($args->toArray());
        return new GetWirelessGatewayCertificateResponse($result->toArray());
    }
}
