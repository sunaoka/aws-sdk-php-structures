<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow;

trait CreateIdMappingWorkflowTrait
{
    /**
     * @param CreateIdMappingWorkflowRequest $args
     * @return CreateIdMappingWorkflowResponse
     */
    public function createIdMappingWorkflow(CreateIdMappingWorkflowRequest $args)
    {
        $result = parent::createIdMappingWorkflow($args->toArray());
        return new CreateIdMappingWorkflowResponse($result->toArray());
    }
}
