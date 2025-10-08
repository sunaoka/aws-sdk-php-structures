<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis;

trait StartNetworkInsightsAnalysisTrait
{
    /**
     * @param StartNetworkInsightsAnalysisRequest $args
     * @return StartNetworkInsightsAnalysisResponse
     */
    public function startNetworkInsightsAnalysis(StartNetworkInsightsAnalysisRequest $args)
    {
        $result = parent::startNetworkInsightsAnalysis($args->toArray());
        return new StartNetworkInsightsAnalysisResponse($result->toArray());
    }
}
