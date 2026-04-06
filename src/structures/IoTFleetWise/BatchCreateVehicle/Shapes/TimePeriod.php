<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR' $unit
 * @property int<1, max> $value
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     unit: 'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR',
     *     value: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
