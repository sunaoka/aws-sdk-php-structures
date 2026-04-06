<?php

namespace Sunaoka\Aws\Structures\imagebuilder\SendWorkflowStepAction;

trait SendWorkflowStepActionTrait
{
    /**
     * @param SendWorkflowStepActionRequest $args
     * @return SendWorkflowStepActionResponse
     */
    public function sendWorkflowStepAction(SendWorkflowStepActionRequest $args)
    {
        $result = parent::sendWorkflowStepAction($args->toArray());
        return new SendWorkflowStepActionResponse($result->toArray());
    }
}
