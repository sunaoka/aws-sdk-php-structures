<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\StopWorkflow;

trait StopWorkflowTrait
{
    /**
     * @param StopWorkflowRequest $args
     * @return StopWorkflowResponse
     */
    public function stopWorkflow(StopWorkflowRequest $args)
    {
        $result = parent::stopWorkflow($args->toArray());
        return new StopWorkflowResponse($result->toArray());
    }
}
