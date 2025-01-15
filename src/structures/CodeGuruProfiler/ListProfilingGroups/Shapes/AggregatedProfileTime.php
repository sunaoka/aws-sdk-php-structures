<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfilingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PT5M'|'PT1H'|'P1D'|null $period
 * @property \Aws\Api\DateTimeResult|null $start
 */
class AggregatedProfileTime extends Shape
{
    /**
     * @param array{
     *     period?: 'PT5M'|'PT1H'|'P1D'|null,
     *     start?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
