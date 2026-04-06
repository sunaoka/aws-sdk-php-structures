<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioCommitmentModification;

trait BatchCreateBillScenarioCommitmentModificationTrait
{
    /**
     * @param BatchCreateBillScenarioCommitmentModificationRequest $args
     * @return BatchCreateBillScenarioCommitmentModificationResponse
     */
    public function batchCreateBillScenarioCommitmentModification(BatchCreateBillScenarioCommitmentModificationRequest $args)
    {
        $result = parent::batchCreateBillScenarioCommitmentModification($args->toArray());
        return new BatchCreateBillScenarioCommitmentModificationResponse($result->toArray());
    }
}
