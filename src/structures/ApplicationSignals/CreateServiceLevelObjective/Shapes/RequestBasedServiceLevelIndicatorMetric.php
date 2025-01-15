<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property 'LATENCY'|'AVAILABILITY'|null $MetricType
 * @property list<MetricDataQuery> $TotalRequestCountMetric
 * @property MonitoredRequestCountMetricDataQueries $MonitoredRequestCountMetric
 */
class RequestBasedServiceLevelIndicatorMetric extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     MetricType?: 'LATENCY'|'AVAILABILITY'|null,
     *     TotalRequestCountMetric: list<MetricDataQuery>,
     *     MonitoredRequestCountMetric: MonitoredRequestCountMetricDataQueries
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
