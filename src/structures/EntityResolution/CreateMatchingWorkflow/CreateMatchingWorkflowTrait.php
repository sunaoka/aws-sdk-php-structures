<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow;

trait CreateMatchingWorkflowTrait
{
    /**
     * @param CreateMatchingWorkflowRequest $args
     * @return CreateMatchingWorkflowResponse
     */
    public function createMatchingWorkflow(CreateMatchingWorkflowRequest $args)
    {
        $result = parent::createMatchingWorkflow($args->toArray());
        return new CreateMatchingWorkflowResponse($result->toArray());
    }
}
