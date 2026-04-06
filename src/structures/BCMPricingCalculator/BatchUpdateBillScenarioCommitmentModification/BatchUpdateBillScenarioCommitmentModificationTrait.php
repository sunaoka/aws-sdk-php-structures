<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification;

trait BatchUpdateBillScenarioCommitmentModificationTrait
{
    /**
     * @param BatchUpdateBillScenarioCommitmentModificationRequest $args
     * @return BatchUpdateBillScenarioCommitmentModificationResponse
     */
    public function batchUpdateBillScenarioCommitmentModification(BatchUpdateBillScenarioCommitmentModificationRequest $args)
    {
        $result = parent::batchUpdateBillScenarioCommitmentModification($args->toArray());
        return new BatchUpdateBillScenarioCommitmentModificationResponse($result->toArray());
    }
}
