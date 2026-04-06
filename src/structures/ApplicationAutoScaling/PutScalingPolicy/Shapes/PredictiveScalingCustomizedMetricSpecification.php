<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricDataQuery> $MetricDataQueries
 */
class PredictiveScalingCustomizedMetricSpecification extends Shape
{
    /**
     * @param array{MetricDataQueries: list<PredictiveScalingMetricDataQuery>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
