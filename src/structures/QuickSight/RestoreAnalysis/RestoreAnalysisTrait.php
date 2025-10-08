<?php

namespace Sunaoka\Aws\Structures\QuickSight\RestoreAnalysis;

trait RestoreAnalysisTrait
{
    /**
     * @param RestoreAnalysisRequest $args
     * @return RestoreAnalysisResponse
     */
    public function restoreAnalysis(RestoreAnalysisRequest $args)
    {
        $result = parent::restoreAnalysis($args->toArray());
        return new RestoreAnalysisResponse($result->toArray());
    }
}
