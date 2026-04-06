<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'dBW' $units
 * @property double $value
 */
class Eirp extends Shape
{
    /**
     * @param array{
     *     units: 'dBW',
     *     value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
