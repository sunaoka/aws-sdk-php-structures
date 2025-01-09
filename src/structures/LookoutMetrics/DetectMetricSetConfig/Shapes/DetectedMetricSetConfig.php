<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectedField $Offset
 * @property DetectedField $MetricSetFrequency
 * @property DetectedMetricSource $MetricSource
 */
class DetectedMetricSetConfig extends Shape
{
    /**
     * @param array{
     *     Offset?: DetectedField,
     *     MetricSetFrequency?: DetectedField,
     *     MetricSource?: DetectedMetricSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
