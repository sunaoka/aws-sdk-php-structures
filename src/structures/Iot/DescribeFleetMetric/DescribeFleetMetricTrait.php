<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeFleetMetric;

trait DescribeFleetMetricTrait
{
    /**
     * @param DescribeFleetMetricRequest $args
     * @return DescribeFleetMetricResponse
     */
    public function describeFleetMetric(DescribeFleetMetricRequest $args)
    {
        $result = parent::describeFleetMetric($args->toArray());
        return new DescribeFleetMetricResponse($result->toArray());
    }
}
