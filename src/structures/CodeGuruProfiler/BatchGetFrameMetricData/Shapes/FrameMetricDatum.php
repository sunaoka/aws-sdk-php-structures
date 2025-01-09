<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\BatchGetFrameMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrameMetric $frameMetric
 * @property list<double> $values
 */
class FrameMetricDatum extends Shape
{
    /**
     * @param array{
     *     frameMetric: FrameMetric,
     *     values: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
