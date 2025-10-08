<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopeAnalyses;

trait DescribeNetworkInsightsAccessScopeAnalysesTrait
{
    /**
     * @param DescribeNetworkInsightsAccessScopeAnalysesRequest $args
     * @return DescribeNetworkInsightsAccessScopeAnalysesResponse
     */
    public function describeNetworkInsightsAccessScopeAnalyses(DescribeNetworkInsightsAccessScopeAnalysesRequest $args)
    {
        $result = parent::describeNetworkInsightsAccessScopeAnalyses($args->toArray());
        return new DescribeNetworkInsightsAccessScopeAnalysesResponse($result->toArray());
    }
}
