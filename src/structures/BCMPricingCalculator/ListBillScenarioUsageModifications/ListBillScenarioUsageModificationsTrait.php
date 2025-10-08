<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioUsageModifications;

trait ListBillScenarioUsageModificationsTrait
{
    /**
     * @param ListBillScenarioUsageModificationsRequest $args
     * @return ListBillScenarioUsageModificationsResponse
     */
    public function listBillScenarioUsageModifications(ListBillScenarioUsageModificationsRequest $args)
    {
        $result = parent::listBillScenarioUsageModifications($args->toArray());
        return new ListBillScenarioUsageModificationsResponse($result->toArray());
    }
}
