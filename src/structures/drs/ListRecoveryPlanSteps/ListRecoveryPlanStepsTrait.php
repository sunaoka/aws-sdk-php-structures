<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanSteps;

trait ListRecoveryPlanStepsTrait
{
    /**
     * @param ListRecoveryPlanStepsRequest $args
     * @return ListRecoveryPlanStepsResponse
     */
    public function listRecoveryPlanSteps(ListRecoveryPlanStepsRequest $args)
    {
        $result = parent::listRecoveryPlanSteps($args->toArray());
        return new ListRecoveryPlanStepsResponse($result->toArray());
    }
}
