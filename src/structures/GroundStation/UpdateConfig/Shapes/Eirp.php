<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $value
 * @property 'dBW' $units
 */
class Eirp extends Shape
{
    /**
     * @param array{
     *     value: double,
     *     units: 'dBW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
