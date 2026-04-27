<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property 'LATENCY'|'AVAILABILITY'|null $MetricType
 * @property list<MetricDataQuery> $MetricDataQueries
 * @property DependencyConfig|null $DependencyConfig
 * @property MetricSource|null $MetricSource
 * @property CompositeSliConfig|null $CompositeSliConfig
 */
class ServiceLevelIndicatorMetric extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     MetricType?: 'LATENCY'|'AVAILABILITY'|null,
     *     MetricDataQueries: list<MetricDataQuery>,
     *     DependencyConfig?: DependencyConfig|null,
     *     MetricSource?: MetricSource|null,
     *     CompositeSliConfig?: CompositeSliConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
