<?php

namespace Sunaoka\Aws\Structures\Textract\StartExpenseAnalysis;

trait StartExpenseAnalysisTrait
{
    /**
     * @param StartExpenseAnalysisRequest $args
     * @return StartExpenseAnalysisResponse
     */
    public function startExpenseAnalysis(StartExpenseAnalysisRequest $args)
    {
        $result = parent::startExpenseAnalysis($args->toArray());
        return new StartExpenseAnalysisResponse($result->toArray());
    }
}
