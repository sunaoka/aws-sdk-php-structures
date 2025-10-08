<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsAccessScopeAnalysis;

trait DeleteNetworkInsightsAccessScopeAnalysisTrait
{
    /**
     * @param DeleteNetworkInsightsAccessScopeAnalysisRequest $args
     * @return DeleteNetworkInsightsAccessScopeAnalysisResponse
     */
    public function deleteNetworkInsightsAccessScopeAnalysis(DeleteNetworkInsightsAccessScopeAnalysisRequest $args)
    {
        $result = parent::deleteNetworkInsightsAccessScopeAnalysis($args->toArray());
        return new DeleteNetworkInsightsAccessScopeAnalysisResponse($result->toArray());
    }
}
