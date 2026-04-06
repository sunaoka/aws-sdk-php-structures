<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarios;

trait ListBillScenariosTrait
{
    /**
     * @param ListBillScenariosRequest $args
     * @return ListBillScenariosResponse
     */
    public function listBillScenarios(ListBillScenariosRequest $args)
    {
        $result = parent::listBillScenarios($args->toArray());
        return new ListBillScenariosResponse($result->toArray());
    }
}
