<?php

namespace Sunaoka\Aws\Structures\Glue\StopJobUpgradeAnalysis;

trait StopJobUpgradeAnalysisTrait
{
    /**
     * @param StopJobUpgradeAnalysisRequest $args
     * @return StopJobUpgradeAnalysisResponse
     */
    public function stopJobUpgradeAnalysis(StopJobUpgradeAnalysisRequest $args)
    {
        $result = parent::stopJobUpgradeAnalysis($args->toArray());
        return new StopJobUpgradeAnalysisResponse($result->toArray());
    }
}
