<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlan;

trait UpdateRecoveryPlanTrait
{
    /**
     * @param UpdateRecoveryPlanRequest $args
     * @return UpdateRecoveryPlanResponse
     */
    public function updateRecoveryPlan(UpdateRecoveryPlanRequest $args)
    {
        $result = parent::updateRecoveryPlan($args->toArray());
        return new UpdateRecoveryPlanResponse($result->toArray());
    }
}
