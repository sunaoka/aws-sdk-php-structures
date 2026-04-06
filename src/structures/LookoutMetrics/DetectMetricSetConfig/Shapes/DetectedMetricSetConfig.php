<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedField|null $Offset
 * @property DetectedField|null $MetricSetFrequency
 * @property DetectedMetricSource|null $MetricSource
 */
class DetectedMetricSetConfig extends Shape
{
    /**
     * @param array{
     *     Offset?: DetectedField|null,
     *     MetricSetFrequency?: DetectedField|null,
     *     MetricSource?: DetectedMetricSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
