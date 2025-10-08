<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow;

trait GetIdMappingWorkflowTrait
{
    /**
     * @param GetIdMappingWorkflowRequest $args
     * @return GetIdMappingWorkflowResponse
     */
    public function getIdMappingWorkflow(GetIdMappingWorkflowRequest $args)
    {
        $result = parent::getIdMappingWorkflow($args->toArray());
        return new GetIdMappingWorkflowResponse($result->toArray());
    }
}
