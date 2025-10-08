<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings;

trait GetNetworkInsightsAccessScopeAnalysisFindingsTrait
{
    /**
     * @param GetNetworkInsightsAccessScopeAnalysisFindingsRequest $args
     * @return GetNetworkInsightsAccessScopeAnalysisFindingsResponse
     */
    public function getNetworkInsightsAccessScopeAnalysisFindings(
        GetNetworkInsightsAccessScopeAnalysisFindingsRequest $args,
    ) {
        $result = parent::getNetworkInsightsAccessScopeAnalysisFindings($args->toArray());
        return new GetNetworkInsightsAccessScopeAnalysisFindingsResponse($result->toArray());
    }
}
