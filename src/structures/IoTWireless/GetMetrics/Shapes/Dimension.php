<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DeviceId'|'GatewayId' $name
 * @property string $value
 */
class Dimension extends Shape
{
    /**
     * @param array{
     *     name?: 'DeviceId'|'GatewayId',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
