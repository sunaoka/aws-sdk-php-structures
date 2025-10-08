<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAccessScopeAnalysis;

trait StartNetworkInsightsAccessScopeAnalysisTrait
{
    /**
     * @param StartNetworkInsightsAccessScopeAnalysisRequest $args
     * @return StartNetworkInsightsAccessScopeAnalysisResponse
     */
    public function startNetworkInsightsAccessScopeAnalysis(StartNetworkInsightsAccessScopeAnalysisRequest $args)
    {
        $result = parent::startNetworkInsightsAccessScopeAnalysis($args->toArray());
        return new StartNetworkInsightsAccessScopeAnalysisResponse($result->toArray());
    }
}
