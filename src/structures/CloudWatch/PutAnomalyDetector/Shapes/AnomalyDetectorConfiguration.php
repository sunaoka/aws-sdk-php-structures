<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Range> $ExcludedTimeRanges
 * @property string $MetricTimezone
 */
class AnomalyDetectorConfiguration extends Shape
{
    /**
     * @param array{
     *     ExcludedTimeRanges?: list<Range>,
     *     MetricTimezone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
