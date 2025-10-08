<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeSubscriptionFilters;

trait DescribeSubscriptionFiltersTrait
{
    /**
     * @param DescribeSubscriptionFiltersRequest $args
     * @return DescribeSubscriptionFiltersResponse
     */
    public function describeSubscriptionFilters(DescribeSubscriptionFiltersRequest $args)
    {
        $result = parent::describeSubscriptionFilters($args->toArray());
        return new DescribeSubscriptionFiltersResponse($result->toArray());
    }
}
