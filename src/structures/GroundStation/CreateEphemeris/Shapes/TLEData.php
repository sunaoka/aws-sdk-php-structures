<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tleLine1
 * @property string $tleLine2
 * @property TimeRange $validTimeRange
 */
class TLEData extends Shape
{
    /**
     * @param array{
     *     tleLine1: string,
     *     tleLine2: string,
     *     validTimeRange: TimeRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
