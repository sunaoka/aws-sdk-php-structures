<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\UpdateProfilingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PT5M'|'PT1H'|'P1D' $period
 * @property \Aws\Api\DateTimeResult $start
 */
class AggregatedProfileTime extends Shape
{
    /**
     * @param array{
     *     period?: 'PT5M'|'PT1H'|'P1D',
     *     start?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
