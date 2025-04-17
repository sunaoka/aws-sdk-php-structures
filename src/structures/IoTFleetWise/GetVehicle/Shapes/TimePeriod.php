<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR' $unit
 * @property int<1, 2147483647> $value
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     unit: 'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR',
     *     value: int<1, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
