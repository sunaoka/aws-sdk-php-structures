<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteBillScenarioCommitmentModification;

trait BatchDeleteBillScenarioCommitmentModificationTrait
{
    /**
     * @param BatchDeleteBillScenarioCommitmentModificationRequest $args
     * @return BatchDeleteBillScenarioCommitmentModificationResponse
     */
    public function batchDeleteBillScenarioCommitmentModification(BatchDeleteBillScenarioCommitmentModificationRequest $args)
    {
        $result = parent::batchDeleteBillScenarioCommitmentModification($args->toArray());
        return new BatchDeleteBillScenarioCommitmentModificationResponse($result->toArray());
    }
}
