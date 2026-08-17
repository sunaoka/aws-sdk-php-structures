<?php

namespace Sunaoka\Aws\Structures\drs\CreateRecoveryPlanStep;

trait CreateRecoveryPlanStepTrait
{
    /**
     * @param CreateRecoveryPlanStepRequest $args
     * @return CreateRecoveryPlanStepResponse
     */
    public function createRecoveryPlanStep(CreateRecoveryPlanStepRequest $args)
    {
        $result = parent::createRecoveryPlanStep($args->toArray());
        return new CreateRecoveryPlanStepResponse($result->toArray());
    }
}
