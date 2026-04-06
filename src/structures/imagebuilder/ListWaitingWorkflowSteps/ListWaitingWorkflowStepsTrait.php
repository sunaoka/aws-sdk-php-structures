<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWaitingWorkflowSteps;

trait ListWaitingWorkflowStepsTrait
{
    /**
     * @param ListWaitingWorkflowStepsRequest $args
     * @return ListWaitingWorkflowStepsResponse
     */
    public function listWaitingWorkflowSteps(ListWaitingWorkflowStepsRequest $args)
    {
        $result = parent::listWaitingWorkflowSteps($args->toArray());
        return new ListWaitingWorkflowStepsResponse($result->toArray());
    }
}
