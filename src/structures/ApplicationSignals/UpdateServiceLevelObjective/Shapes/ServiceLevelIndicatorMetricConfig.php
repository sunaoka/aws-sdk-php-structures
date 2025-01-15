<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property 'LATENCY'|'AVAILABILITY'|null $MetricType
 * @property string|null $Statistic
 * @property int<60, 900>|null $PeriodSeconds
 * @property list<MetricDataQuery>|null $MetricDataQueries
 */
class ServiceLevelIndicatorMetricConfig extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     MetricType?: 'LATENCY'|'AVAILABILITY'|null,
     *     Statistic?: string|null,
     *     PeriodSeconds?: int<60, 900>|null,
     *     MetricDataQueries?: list<MetricDataQuery>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
