<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow;

trait UpdateMatchingWorkflowTrait
{
    /**
     * @param UpdateMatchingWorkflowRequest $args
     * @return UpdateMatchingWorkflowResponse
     */
    public function updateMatchingWorkflow(UpdateMatchingWorkflowRequest $args)
    {
        $result = parent::updateMatchingWorkflow($args->toArray());
        return new UpdateMatchingWorkflowResponse($result->toArray());
    }
}
