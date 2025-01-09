<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricDataQuery> $GoodCountMetric
 * @property list<MetricDataQuery> $BadCountMetric
 */
class MonitoredRequestCountMetricDataQueries extends Shape
{
    /**
     * @param array{
     *     GoodCountMetric?: list<MetricDataQuery>,
     *     BadCountMetric?: list<MetricDataQuery>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
