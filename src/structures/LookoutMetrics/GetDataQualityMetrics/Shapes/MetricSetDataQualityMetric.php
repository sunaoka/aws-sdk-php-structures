<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricSetArn
 * @property list<DataQualityMetric> $DataQualityMetricList
 */
class MetricSetDataQualityMetric extends Shape
{
    /**
     * @param array{
     *     MetricSetArn?: string,
     *     DataQualityMetricList?: list<DataQualityMetric>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
