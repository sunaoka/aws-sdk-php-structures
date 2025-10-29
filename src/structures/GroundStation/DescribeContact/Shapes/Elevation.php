<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $value
 * @property 'DEGREE_ANGLE'|'RADIAN' $unit
 */
class Elevation extends Shape
{
    /**
     * @param array{
     *     value: double,
     *     unit: 'DEGREE_ANGLE'|'RADIAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
