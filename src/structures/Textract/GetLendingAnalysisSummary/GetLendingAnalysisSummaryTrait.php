<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary;

trait GetLendingAnalysisSummaryTrait
{
    /**
     * @param GetLendingAnalysisSummaryRequest $args
     * @return GetLendingAnalysisSummaryResponse
     */
    public function getLendingAnalysisSummary(GetLendingAnalysisSummaryRequest $args)
    {
        $result = parent::getLendingAnalysisSummary($args->toArray());
        return new GetLendingAnalysisSummaryResponse($result->toArray());
    }
}
