<?php

namespace Sunaoka\Aws\Structures\Transfer\SendWorkflowStepState;

trait SendWorkflowStepStateTrait
{
    /**
     * @param SendWorkflowStepStateRequest $args
     * @return SendWorkflowStepStateResponse
     */
    public function sendWorkflowStepState(SendWorkflowStepStateRequest $args)
    {
        $result = parent::sendWorkflowStepState($args->toArray());
        return new SendWorkflowStepStateResponse($result->toArray());
    }
}
