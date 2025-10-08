<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric;

trait DescribeAlarmsForMetricTrait
{
    /**
     * @param DescribeAlarmsForMetricRequest $args
     * @return DescribeAlarmsForMetricResponse
     */
    public function describeAlarmsForMetric(DescribeAlarmsForMetricRequest $args)
    {
        $result = parent::describeAlarmsForMetric($args->toArray());
        return new DescribeAlarmsForMetricResponse($result->toArray());
    }
}
