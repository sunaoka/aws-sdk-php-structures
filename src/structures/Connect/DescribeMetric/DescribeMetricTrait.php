<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeMetric;

trait DescribeMetricTrait
{
    /**
     * @param DescribeMetricRequest $args
     * @return DescribeMetricResponse
     */
    public function describeMetric(DescribeMetricRequest $args)
    {
        $result = parent::describeMetric($args->toArray());
        return new DescribeMetricResponse($result->toArray());
    }
}
