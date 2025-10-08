<?php

namespace Sunaoka\Aws\Structures\Textract\StartLendingAnalysis;

trait StartLendingAnalysisTrait
{
    /**
     * @param StartLendingAnalysisRequest $args
     * @return StartLendingAnalysisResponse
     */
    public function startLendingAnalysis(StartLendingAnalysisRequest $args)
    {
        $result = parent::startLendingAnalysis($args->toArray());
        return new StartLendingAnalysisResponse($result->toArray());
    }
}
