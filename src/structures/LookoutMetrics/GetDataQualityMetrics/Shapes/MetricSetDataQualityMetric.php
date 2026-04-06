<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricSetArn
 * @property list<DataQualityMetric>|null $DataQualityMetricList
 */
class MetricSetDataQualityMetric extends Shape
{
    /**
     * @param array{
     *     MetricSetArn?: string|null,
     *     DataQualityMetricList?: list<DataQualityMetric>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
