<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis;

trait GetLendingAnalysisTrait
{
    /**
     * @param GetLendingAnalysisRequest $args
     * @return GetLendingAnalysisResponse
     */
    public function getLendingAnalysis(GetLendingAnalysisRequest $args)
    {
        $result = parent::getLendingAnalysis($args->toArray());
        return new GetLendingAnalysisResponse($result->toArray());
    }
}
