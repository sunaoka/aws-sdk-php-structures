<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioCommitmentModifications;

trait ListBillScenarioCommitmentModificationsTrait
{
    /**
     * @param ListBillScenarioCommitmentModificationsRequest $args
     * @return ListBillScenarioCommitmentModificationsResponse
     */
    public function listBillScenarioCommitmentModifications(ListBillScenarioCommitmentModificationsRequest $args)
    {
        $result = parent::listBillScenarioCommitmentModifications($args->toArray());
        return new ListBillScenarioCommitmentModificationsResponse($result->toArray());
    }
}
