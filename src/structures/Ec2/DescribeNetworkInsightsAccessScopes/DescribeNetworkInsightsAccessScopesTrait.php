<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopes;

trait DescribeNetworkInsightsAccessScopesTrait
{
    /**
     * @param DescribeNetworkInsightsAccessScopesRequest $args
     * @return DescribeNetworkInsightsAccessScopesResponse
     */
    public function describeNetworkInsightsAccessScopes(DescribeNetworkInsightsAccessScopesRequest $args)
    {
        $result = parent::describeNetworkInsightsAccessScopes($args->toArray());
        return new DescribeNetworkInsightsAccessScopesResponse($result->toArray());
    }
}
