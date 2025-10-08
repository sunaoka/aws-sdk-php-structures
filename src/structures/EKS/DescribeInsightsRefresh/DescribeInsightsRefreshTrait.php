<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsightsRefresh;

trait DescribeInsightsRefreshTrait
{
    /**
     * @param DescribeInsightsRefreshRequest $args
     * @return DescribeInsightsRefreshResponse
     */
    public function describeInsightsRefresh(DescribeInsightsRefreshRequest $args)
    {
        $result = parent::describeInsightsRefresh($args->toArray());
        return new DescribeInsightsRefreshResponse($result->toArray());
    }
}
