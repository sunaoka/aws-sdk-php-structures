<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property 'LATENCY'|'AVAILABILITY'|null $MetricType
 * @property string|null $MetricName
 * @property string|null $Statistic
 * @property int<60, 900>|null $PeriodSeconds
 * @property list<MetricDataQuery>|null $MetricDataQueries
 * @property DependencyConfig|null $DependencyConfig
 */
class ServiceLevelIndicatorMetricConfig extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     MetricType?: 'LATENCY'|'AVAILABILITY'|null,
     *     MetricName?: string|null,
     *     Statistic?: string|null,
     *     PeriodSeconds?: int<60, 900>|null,
     *     MetricDataQueries?: list<MetricDataQuery>|null,
     *     DependencyConfig?: DependencyConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
