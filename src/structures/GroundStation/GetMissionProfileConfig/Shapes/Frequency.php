<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfileConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GHz'|'MHz'|'kHz' $units
 * @property double $value
 */
class Frequency extends Shape
{
    /**
     * @param array{
     *     units: 'GHz'|'MHz'|'kHz',
     *     value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
