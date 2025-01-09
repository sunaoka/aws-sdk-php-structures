<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UpdateDataSource
 * @property string $UpdateDataRole
 * @property LoRaWANUpdateGatewayTaskCreate $LoRaWAN
 */
class UpdateWirelessGatewayTaskCreate extends Shape
{
    /**
     * @param array{
     *     UpdateDataSource?: string,
     *     UpdateDataRole?: string,
     *     LoRaWAN?: LoRaWANUpdateGatewayTaskCreate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
