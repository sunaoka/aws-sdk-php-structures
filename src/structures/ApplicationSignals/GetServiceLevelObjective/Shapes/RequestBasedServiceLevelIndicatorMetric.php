<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property string $OperationName
 * @property 'LATENCY'|'AVAILABILITY' $MetricType
 * @property list<MetricDataQuery> $TotalRequestCountMetric
 * @property MonitoredRequestCountMetricDataQueries $MonitoredRequestCountMetric
 */
class RequestBasedServiceLevelIndicatorMetric extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>,
     *     OperationName?: string,
     *     MetricType?: 'LATENCY'|'AVAILABILITY',
     *     TotalRequestCountMetric: list<MetricDataQuery>,
     *     MonitoredRequestCountMetric: MonitoredRequestCountMetricDataQueries
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
