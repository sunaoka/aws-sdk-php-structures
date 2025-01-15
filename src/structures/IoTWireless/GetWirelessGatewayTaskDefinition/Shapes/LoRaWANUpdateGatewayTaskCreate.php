<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UpdateSignature
 * @property int<1, 4294967295>|null $SigKeyCrc
 * @property LoRaWANGatewayVersion|null $CurrentVersion
 * @property LoRaWANGatewayVersion|null $UpdateVersion
 */
class LoRaWANUpdateGatewayTaskCreate extends Shape
{
    /**
     * @param array{
     *     UpdateSignature?: string|null,
     *     SigKeyCrc?: int<1, 4294967295>|null,
     *     CurrentVersion?: LoRaWANGatewayVersion|null,
     *     UpdateVersion?: LoRaWANGatewayVersion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
