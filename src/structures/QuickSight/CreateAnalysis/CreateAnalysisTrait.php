<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis;

trait CreateAnalysisTrait
{
    /**
     * @param CreateAnalysisRequest $args
     * @return CreateAnalysisResponse
     */
    public function createAnalysis(CreateAnalysisRequest $args)
    {
        $result = parent::createAnalysis($args->toArray());
        return new CreateAnalysisResponse($result->toArray());
    }
}
