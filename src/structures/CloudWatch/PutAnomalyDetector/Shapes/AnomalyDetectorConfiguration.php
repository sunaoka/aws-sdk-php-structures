<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Range>|null $ExcludedTimeRanges
 * @property string|null $MetricTimezone
 */
class AnomalyDetectorConfiguration extends Shape
{
    /**
     * @param array{
     *     ExcludedTimeRanges?: list<Range>|null,
     *     MetricTimezone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
