<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobUpgradeAnalysis;

trait GetJobUpgradeAnalysisTrait
{
    /**
     * @param GetJobUpgradeAnalysisRequest $args
     * @return GetJobUpgradeAnalysisResponse
     */
    public function getJobUpgradeAnalysis(GetJobUpgradeAnalysisRequest $args)
    {
        $result = parent::getJobUpgradeAnalysis($args->toArray());
        return new GetJobUpgradeAnalysisResponse($result->toArray());
    }
}
