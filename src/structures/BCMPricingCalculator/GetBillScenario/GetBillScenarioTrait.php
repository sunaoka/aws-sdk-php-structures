<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetBillScenario;

trait GetBillScenarioTrait
{
    /**
     * @param GetBillScenarioRequest $args
     * @return GetBillScenarioResponse
     */
    public function getBillScenario(GetBillScenarioRequest $args)
    {
        $result = parent::getBillScenario($args->toArray());
        return new GetBillScenarioResponse($result->toArray());
    }
}
