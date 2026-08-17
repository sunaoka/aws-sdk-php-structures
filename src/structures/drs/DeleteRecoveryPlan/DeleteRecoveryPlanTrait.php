<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryPlan;

trait DeleteRecoveryPlanTrait
{
    /**
     * @param DeleteRecoveryPlanRequest $args
     * @return DeleteRecoveryPlanResponse
     */
    public function deleteRecoveryPlan(DeleteRecoveryPlanRequest $args)
    {
        $result = parent::deleteRecoveryPlan($args->toArray());
        return new DeleteRecoveryPlanResponse($result->toArray());
    }
}
