<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetWirelessGatewayCertificateRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
