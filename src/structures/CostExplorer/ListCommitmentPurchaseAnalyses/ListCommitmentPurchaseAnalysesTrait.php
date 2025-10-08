<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses;

trait ListCommitmentPurchaseAnalysesTrait
{
    /**
     * @param ListCommitmentPurchaseAnalysesRequest $args
     * @return ListCommitmentPurchaseAnalysesResponse
     */
    public function listCommitmentPurchaseAnalyses(ListCommitmentPurchaseAnalysesRequest $args)
    {
        $result = parent::listCommitmentPurchaseAnalyses($args->toArray());
        return new ListCommitmentPurchaseAnalysesResponse($result->toArray());
    }
}
