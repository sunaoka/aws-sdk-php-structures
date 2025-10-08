<?php

namespace Sunaoka\Aws\Structures\Glue\CreateWorkflow;

trait CreateWorkflowTrait
{
    /**
     * @param CreateWorkflowRequest $args
     * @return CreateWorkflowResponse
     */
    public function createWorkflow(CreateWorkflowRequest $args)
    {
        $result = parent::createWorkflow($args->toArray());
        return new CreateWorkflowResponse($result->toArray());
    }
}
