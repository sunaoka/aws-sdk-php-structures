<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $value
 * @property 'GHz'|'MHz'|'kHz' $units
 */
class FrequencyBandwidth extends Shape
{
    /**
     * @param array{
     *     value: double,
     *     units: 'GHz'|'MHz'|'kHz'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
