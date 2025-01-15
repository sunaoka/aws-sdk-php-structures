<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UpdateDataSource
 * @property string|null $UpdateDataRole
 * @property LoRaWANUpdateGatewayTaskCreate|null $LoRaWAN
 */
class UpdateWirelessGatewayTaskCreate extends Shape
{
    /**
     * @param array{
     *     UpdateDataSource?: string|null,
     *     UpdateDataRole?: string|null,
     *     LoRaWAN?: LoRaWANUpdateGatewayTaskCreate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
