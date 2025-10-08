<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis;

trait GetCommitmentPurchaseAnalysisTrait
{
    /**
     * @param GetCommitmentPurchaseAnalysisRequest $args
     * @return GetCommitmentPurchaseAnalysisResponse
     */
    public function getCommitmentPurchaseAnalysis(GetCommitmentPurchaseAnalysisRequest $args)
    {
        $result = parent::getCommitmentPurchaseAnalysis($args->toArray());
        return new GetCommitmentPurchaseAnalysisResponse($result->toArray());
    }
}
