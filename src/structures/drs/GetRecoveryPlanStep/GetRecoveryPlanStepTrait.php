<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanStep;

trait GetRecoveryPlanStepTrait
{
    /**
     * @param GetRecoveryPlanStepRequest $args
     * @return GetRecoveryPlanStepResponse
     */
    public function getRecoveryPlanStep(GetRecoveryPlanStepRequest $args)
    {
        $result = parent::getRecoveryPlanStep($args->toArray());
        return new GetRecoveryPlanStepResponse($result->toArray());
    }
}
