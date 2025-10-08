<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification;

trait BatchCreateBillScenarioUsageModificationTrait
{
    /**
     * @param BatchCreateBillScenarioUsageModificationRequest $args
     * @return BatchCreateBillScenarioUsageModificationResponse
     */
    public function batchCreateBillScenarioUsageModification(BatchCreateBillScenarioUsageModificationRequest $args)
    {
        $result = parent::batchCreateBillScenarioUsageModification($args->toArray());
        return new BatchCreateBillScenarioUsageModificationResponse($result->toArray());
    }
}
