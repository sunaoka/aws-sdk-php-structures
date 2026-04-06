<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property 'LATENCY'|'AVAILABILITY'|null $MetricType
 * @property list<MetricDataQuery> $MetricDataQueries
 */
class ServiceLevelIndicatorMetric extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     MetricType?: 'LATENCY'|'AVAILABILITY'|null,
     *     MetricDataQueries: list<MetricDataQuery>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
