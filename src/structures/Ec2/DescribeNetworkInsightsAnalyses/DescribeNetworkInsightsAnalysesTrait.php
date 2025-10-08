<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses;

trait DescribeNetworkInsightsAnalysesTrait
{
    /**
     * @param DescribeNetworkInsightsAnalysesRequest $args
     * @return DescribeNetworkInsightsAnalysesResponse
     */
    public function describeNetworkInsightsAnalyses(DescribeNetworkInsightsAnalysesRequest $args)
    {
        $result = parent::describeNetworkInsightsAnalyses($args->toArray());
        return new DescribeNetworkInsightsAnalysesResponse($result->toArray());
    }
}
