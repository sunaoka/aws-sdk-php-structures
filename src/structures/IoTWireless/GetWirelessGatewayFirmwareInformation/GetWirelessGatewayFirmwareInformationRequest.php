<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayFirmwareInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetWirelessGatewayFirmwareInformationRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
