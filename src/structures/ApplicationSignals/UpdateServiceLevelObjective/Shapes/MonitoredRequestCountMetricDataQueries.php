<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricDataQuery>|null $GoodCountMetric
 * @property list<MetricDataQuery>|null $BadCountMetric
 */
class MonitoredRequestCountMetricDataQueries extends Shape
{
    /**
     * @param array{
     *     GoodCountMetric?: list<MetricDataQuery>|null,
     *     BadCountMetric?: list<MetricDataQuery>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
