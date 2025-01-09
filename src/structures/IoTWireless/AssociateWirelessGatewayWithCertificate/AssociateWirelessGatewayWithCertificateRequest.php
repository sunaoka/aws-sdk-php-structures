<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessGatewayWithCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IotCertificateId
 */
class AssociateWirelessGatewayWithCertificateRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IotCertificateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
