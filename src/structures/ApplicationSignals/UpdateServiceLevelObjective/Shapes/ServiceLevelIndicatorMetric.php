<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property string $OperationName
 * @property 'LATENCY'|'AVAILABILITY' $MetricType
 * @property list<MetricDataQuery> $MetricDataQueries
 */
class ServiceLevelIndicatorMetric extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>,
     *     OperationName?: string,
     *     MetricType?: 'LATENCY'|'AVAILABILITY',
     *     MetricDataQueries: list<MetricDataQuery>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
