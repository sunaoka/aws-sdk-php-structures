<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\DeleteBillScenario;

trait DeleteBillScenarioTrait
{
    /**
     * @param DeleteBillScenarioRequest $args
     * @return DeleteBillScenarioResponse
     */
    public function deleteBillScenario(DeleteBillScenarioRequest $args)
    {
        $result = parent::deleteBillScenario($args->toArray());
        return new DeleteBillScenarioResponse($result->toArray());
    }
}
