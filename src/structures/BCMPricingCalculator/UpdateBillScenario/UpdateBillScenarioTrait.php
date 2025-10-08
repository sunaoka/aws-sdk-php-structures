<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateBillScenario;

trait UpdateBillScenarioTrait
{
    /**
     * @param UpdateBillScenarioRequest $args
     * @return UpdateBillScenarioResponse
     */
    public function updateBillScenario(UpdateBillScenarioRequest $args)
    {
        $result = parent::updateBillScenario($args->toArray());
        return new UpdateBillScenarioResponse($result->toArray());
    }
}
