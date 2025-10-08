<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsAnalysis;

trait DeleteNetworkInsightsAnalysisTrait
{
    /**
     * @param DeleteNetworkInsightsAnalysisRequest $args
     * @return DeleteNetworkInsightsAnalysisResponse
     */
    public function deleteNetworkInsightsAnalysis(DeleteNetworkInsightsAnalysisRequest $args)
    {
        $result = parent::deleteNetworkInsightsAnalysis($args->toArray());
        return new DeleteNetworkInsightsAnalysisResponse($result->toArray());
    }
}
