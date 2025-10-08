<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet;

trait DescribeMetricSetTrait
{
    /**
     * @param DescribeMetricSetRequest $args
     * @return DescribeMetricSetResponse
     */
    public function describeMetricSet(DescribeMetricSetRequest $args)
    {
        $result = parent::describeMetricSet($args->toArray());
        return new DescribeMetricSetResponse($result->toArray());
    }
}
