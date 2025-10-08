<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateWirelessGatewayFromCertificate;

trait DisassociateWirelessGatewayFromCertificateTrait
{
    /**
     * @param DisassociateWirelessGatewayFromCertificateRequest $args
     * @return DisassociateWirelessGatewayFromCertificateResponse
     */
    public function disassociateWirelessGatewayFromCertificate(
        DisassociateWirelessGatewayFromCertificateRequest $args,
    ) {
        $result = parent::disassociateWirelessGatewayFromCertificate($args->toArray());
        return new DisassociateWirelessGatewayFromCertificateResponse($result->toArray());
    }
}
