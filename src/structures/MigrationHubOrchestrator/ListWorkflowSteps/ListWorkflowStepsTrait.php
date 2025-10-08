<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowSteps;

trait ListWorkflowStepsTrait
{
    /**
     * @param ListWorkflowStepsRequest $args
     * @return ListWorkflowStepsResponse
     */
    public function listWorkflowSteps(ListWorkflowStepsRequest $args)
    {
        $result = parent::listWorkflowSteps($args->toArray());
        return new ListWorkflowStepsResponse($result->toArray());
    }
}
