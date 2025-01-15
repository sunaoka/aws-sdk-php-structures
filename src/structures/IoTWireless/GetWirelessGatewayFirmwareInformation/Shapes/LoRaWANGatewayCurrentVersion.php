<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayFirmwareInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANGatewayVersion|null $CurrentVersion
 */
class LoRaWANGatewayCurrentVersion extends Shape
{
    /**
     * @param array{CurrentVersion?: LoRaWANGatewayVersion|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
