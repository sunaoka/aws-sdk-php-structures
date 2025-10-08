<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsPaths;

trait DescribeNetworkInsightsPathsTrait
{
    /**
     * @param DescribeNetworkInsightsPathsRequest $args
     * @return DescribeNetworkInsightsPathsResponse
     */
    public function describeNetworkInsightsPaths(DescribeNetworkInsightsPathsRequest $args)
    {
        $result = parent::describeNetworkInsightsPaths($args->toArray());
        return new DescribeNetworkInsightsPathsResponse($result->toArray());
    }
}
