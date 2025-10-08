<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCustomMetric;

trait DescribeCustomMetricTrait
{
    /**
     * @param DescribeCustomMetricRequest $args
     * @return DescribeCustomMetricResponse
     */
    public function describeCustomMetric(DescribeCustomMetricRequest $args)
    {
        $result = parent::describeCustomMetric($args->toArray());
        return new DescribeCustomMetricResponse($result->toArray());
    }
}
