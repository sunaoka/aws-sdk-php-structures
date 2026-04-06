<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeleteIdMappingWorkflow;

trait DeleteIdMappingWorkflowTrait
{
    /**
     * @param DeleteIdMappingWorkflowRequest $args
     * @return DeleteIdMappingWorkflowResponse
     */
    public function deleteIdMappingWorkflow(DeleteIdMappingWorkflowRequest $args)
    {
        $result = parent::deleteIdMappingWorkflow($args->toArray());
        return new DeleteIdMappingWorkflowResponse($result->toArray());
    }
}
