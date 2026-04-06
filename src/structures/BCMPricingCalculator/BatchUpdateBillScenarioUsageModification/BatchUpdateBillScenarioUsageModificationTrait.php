<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioUsageModification;

trait BatchUpdateBillScenarioUsageModificationTrait
{
    /**
     * @param BatchUpdateBillScenarioUsageModificationRequest $args
     * @return BatchUpdateBillScenarioUsageModificationResponse
     */
    public function batchUpdateBillScenarioUsageModification(BatchUpdateBillScenarioUsageModificationRequest $args)
    {
        $result = parent::batchUpdateBillScenarioUsageModification($args->toArray());
        return new BatchUpdateBillScenarioUsageModificationResponse($result->toArray());
    }
}
