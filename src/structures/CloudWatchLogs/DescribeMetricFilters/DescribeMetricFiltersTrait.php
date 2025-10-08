<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeMetricFilters;

trait DescribeMetricFiltersTrait
{
    /**
     * @param DescribeMetricFiltersRequest $args
     * @return DescribeMetricFiltersResponse
     */
    public function describeMetricFilters(DescribeMetricFiltersRequest $args)
    {
        $result = parent::describeMetricFilters($args->toArray());
        return new DescribeMetricFiltersResponse($result->toArray());
    }
}
