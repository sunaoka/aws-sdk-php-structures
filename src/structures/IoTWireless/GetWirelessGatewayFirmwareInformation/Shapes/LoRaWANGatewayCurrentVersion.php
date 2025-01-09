<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayFirmwareInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANGatewayVersion $CurrentVersion
 */
class LoRaWANGatewayCurrentVersion extends Shape
{
    /**
     * @param array{CurrentVersion?: LoRaWANGatewayVersion} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
