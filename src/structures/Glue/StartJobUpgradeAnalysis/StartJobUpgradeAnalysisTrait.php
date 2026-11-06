<?php

namespace Sunaoka\Aws\Structures\Glue\StartJobUpgradeAnalysis;

trait StartJobUpgradeAnalysisTrait
{
    /**
     * @param StartJobUpgradeAnalysisRequest $args
     * @return StartJobUpgradeAnalysisResponse
     */
    public function startJobUpgradeAnalysis(StartJobUpgradeAnalysisRequest $args)
    {
        $result = parent::startJobUpgradeAnalysis($args->toArray());
        return new StartJobUpgradeAnalysisResponse($result->toArray());
    }
}
