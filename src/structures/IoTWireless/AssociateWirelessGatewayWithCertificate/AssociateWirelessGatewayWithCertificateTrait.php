<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessGatewayWithCertificate;

trait AssociateWirelessGatewayWithCertificateTrait
{
    /**
     * @param AssociateWirelessGatewayWithCertificateRequest $args
     * @return AssociateWirelessGatewayWithCertificateResponse
     */
    public function associateWirelessGatewayWithCertificate(AssociateWirelessGatewayWithCertificateRequest $args)
    {
        $result = parent::associateWirelessGatewayWithCertificate($args->toArray());
        return new AssociateWirelessGatewayWithCertificateResponse($result->toArray());
    }
}
