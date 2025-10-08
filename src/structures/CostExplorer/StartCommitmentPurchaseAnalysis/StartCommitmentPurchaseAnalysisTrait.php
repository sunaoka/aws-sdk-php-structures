<?php

namespace Sunaoka\Aws\Structures\CostExplorer\StartCommitmentPurchaseAnalysis;

trait StartCommitmentPurchaseAnalysisTrait
{
    /**
     * @param StartCommitmentPurchaseAnalysisRequest $args
     * @return StartCommitmentPurchaseAnalysisResponse
     */
    public function startCommitmentPurchaseAnalysis(StartCommitmentPurchaseAnalysisRequest $args)
    {
        $result = parent::startCommitmentPurchaseAnalysis($args->toArray());
        return new StartCommitmentPurchaseAnalysisResponse($result->toArray());
    }
}
