<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $dt
 * @property double $az
 * @property double $el
 */
class TimeAzEl extends Shape
{
    /**
     * @param array{
     *     dt: double,
     *     az: double,
     *     el: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
