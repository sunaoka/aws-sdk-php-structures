<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR' $unit
 * @property int $value
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     unit: 'MILLISECOND'|'SECOND'|'MINUTE'|'HOUR',
     *     value: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
