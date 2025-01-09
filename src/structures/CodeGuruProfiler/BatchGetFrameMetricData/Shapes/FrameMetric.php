<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\BatchGetFrameMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $frameName
 * @property list<string> $threadStates
 * @property 'AggregatedRelativeTotalTime' $type
 */
class FrameMetric extends Shape
{
    /**
     * @param array{
     *     frameName: string,
     *     threadStates: list<string>,
     *     type: 'AggregatedRelativeTotalTime'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
