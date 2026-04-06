<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow;

trait UpdateIdMappingWorkflowTrait
{
    /**
     * @param UpdateIdMappingWorkflowRequest $args
     * @return UpdateIdMappingWorkflowResponse
     */
    public function updateIdMappingWorkflow(UpdateIdMappingWorkflowRequest $args)
    {
        $result = parent::updateIdMappingWorkflow($args->toArray());
        return new UpdateIdMappingWorkflowResponse($result->toArray());
    }
}
