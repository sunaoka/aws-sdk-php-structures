<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\ReturnSavingsPlan;

trait ReturnSavingsPlanTrait
{
    /**
     * @param ReturnSavingsPlanRequest $args
     * @return ReturnSavingsPlanResponse
     */
    public function returnSavingsPlan(ReturnSavingsPlanRequest $args)
    {
        $result = parent::returnSavingsPlan($args->toArray());
        return new ReturnSavingsPlanResponse($result->toArray());
    }
}
