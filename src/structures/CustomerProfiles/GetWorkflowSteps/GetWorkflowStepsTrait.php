<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps;

trait GetWorkflowStepsTrait
{
    /**
     * @param GetWorkflowStepsRequest $args
     * @return GetWorkflowStepsResponse
     */
    public function getWorkflowSteps(GetWorkflowStepsRequest $args)
    {
        $result = parent::getWorkflowSteps($args->toArray());
        return new GetWorkflowStepsResponse($result->toArray());
    }
}
