<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property 'LATENCY'|'AVAILABILITY'|null $MetricType
 * @property list<MetricDataQuery>|null $TotalRequestCountMetric
 * @property MonitoredRequestCountMetricDataQueries|null $MonitoredRequestCountMetric
 * @property DependencyConfig|null $DependencyConfig
 */
class RequestBasedServiceLevelIndicatorMetricConfig extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     MetricType?: 'LATENCY'|'AVAILABILITY'|null,
     *     TotalRequestCountMetric?: list<MetricDataQuery>|null,
     *     MonitoredRequestCountMetric?: MonitoredRequestCountMetricDataQueries|null,
     *     DependencyConfig?: DependencyConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
