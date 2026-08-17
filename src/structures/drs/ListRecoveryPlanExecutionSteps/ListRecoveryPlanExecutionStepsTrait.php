<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutionSteps;

trait ListRecoveryPlanExecutionStepsTrait
{
    /**
     * @param ListRecoveryPlanExecutionStepsRequest $args
     * @return ListRecoveryPlanExecutionStepsResponse
     */
    public function listRecoveryPlanExecutionSteps(ListRecoveryPlanExecutionStepsRequest $args)
    {
        $result = parent::listRecoveryPlanExecutionSteps($args->toArray());
        return new ListRecoveryPlanExecutionStepsResponse($result->toArray());
    }
}
