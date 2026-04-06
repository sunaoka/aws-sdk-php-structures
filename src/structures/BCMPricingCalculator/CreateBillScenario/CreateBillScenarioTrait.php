<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillScenario;

trait CreateBillScenarioTrait
{
    /**
     * @param CreateBillScenarioRequest $args
     * @return CreateBillScenarioResponse
     */
    public function createBillScenario(CreateBillScenarioRequest $args)
    {
        $result = parent::createBillScenario($args->toArray());
        return new CreateBillScenarioResponse($result->toArray());
    }
}
