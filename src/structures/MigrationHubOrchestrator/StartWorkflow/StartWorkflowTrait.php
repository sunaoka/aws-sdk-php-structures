<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\StartWorkflow;

trait StartWorkflowTrait
{
    /**
     * @param StartWorkflowRequest $args
     * @return StartWorkflowResponse
     */
    public function startWorkflow(StartWorkflowRequest $args)
    {
        $result = parent::startWorkflow($args->toArray());
        return new StartWorkflowResponse($result->toArray());
    }
}
