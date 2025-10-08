<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis;

trait UpdateAnalysisTrait
{
    /**
     * @param UpdateAnalysisRequest $args
     * @return UpdateAnalysisResponse
     */
    public function updateAnalysis(UpdateAnalysisRequest $args)
    {
        $result = parent::updateAnalysis($args->toArray());
        return new UpdateAnalysisResponse($result->toArray());
    }
}
