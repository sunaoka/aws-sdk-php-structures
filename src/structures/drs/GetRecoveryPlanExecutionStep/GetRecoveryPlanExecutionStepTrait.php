<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanExecutionStep;

trait GetRecoveryPlanExecutionStepTrait
{
    /**
     * @param GetRecoveryPlanExecutionStepRequest $args
     * @return GetRecoveryPlanExecutionStepResponse
     */
    public function getRecoveryPlanExecutionStep(GetRecoveryPlanExecutionStepRequest $args)
    {
        $result = parent::getRecoveryPlanExecutionStep($args->toArray());
        return new GetRecoveryPlanExecutionStepResponse($result->toArray());
    }
}
