<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis;

trait GetExpenseAnalysisTrait
{
    /**
     * @param GetExpenseAnalysisRequest $args
     * @return GetExpenseAnalysisResponse
     */
    public function getExpenseAnalysis(GetExpenseAnalysisRequest $args)
    {
        $result = parent::getExpenseAnalysis($args->toArray());
        return new GetExpenseAnalysisResponse($result->toArray());
    }
}
