<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAnalysis;

trait DeleteAnalysisTrait
{
    /**
     * @param DeleteAnalysisRequest $args
     * @return DeleteAnalysisResponse
     */
    public function deleteAnalysis(DeleteAnalysisRequest $args)
    {
        $result = parent::deleteAnalysis($args->toArray());
        return new DeleteAnalysisResponse($result->toArray());
    }
}
