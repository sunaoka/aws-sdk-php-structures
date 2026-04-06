<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEGREE_ANGLE'|'RADIAN' $unit
 * @property double $value
 */
class Elevation extends Shape
{
    /**
     * @param array{
     *     unit: 'DEGREE_ANGLE'|'RADIAN',
     *     value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
