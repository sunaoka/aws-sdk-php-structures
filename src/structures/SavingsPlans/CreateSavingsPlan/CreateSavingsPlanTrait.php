<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\CreateSavingsPlan;

trait CreateSavingsPlanTrait
{
    /**
     * @param CreateSavingsPlanRequest $args
     * @return CreateSavingsPlanResponse
     */
    public function createSavingsPlan(CreateSavingsPlanRequest $args)
    {
        $result = parent::createSavingsPlan($args->toArray());
        return new CreateSavingsPlanResponse($result->toArray());
    }
}
