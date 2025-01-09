<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UpdateSignature
 * @property int $SigKeyCrc
 * @property LoRaWANGatewayVersion $CurrentVersion
 * @property LoRaWANGatewayVersion $UpdateVersion
 */
class LoRaWANUpdateGatewayTaskCreate extends Shape
{
    /**
     * @param array{
     *     UpdateSignature?: string,
     *     SigKeyCrc?: int,
     *     CurrentVersion?: LoRaWANGatewayVersion,
     *     UpdateVersion?: LoRaWANGatewayVersion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
