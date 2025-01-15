<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DeviceId'|'GatewayId'|null $name
 * @property string|null $value
 */
class Dimension extends Shape
{
    /**
     * @param array{
     *     name?: 'DeviceId'|'GatewayId'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
