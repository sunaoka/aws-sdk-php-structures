<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeleteMatchingWorkflow;

trait DeleteMatchingWorkflowTrait
{
    /**
     * @param DeleteMatchingWorkflowRequest $args
     * @return DeleteMatchingWorkflowResponse
     */
    public function deleteMatchingWorkflow(DeleteMatchingWorkflowRequest $args)
    {
        $result = parent::deleteMatchingWorkflow($args->toArray());
        return new DeleteMatchingWorkflowResponse($result->toArray());
    }
}
