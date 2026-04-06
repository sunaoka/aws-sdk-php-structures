<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdMappingWorkflows;

trait ListIdMappingWorkflowsTrait
{
    /**
     * @param ListIdMappingWorkflowsRequest $args
     * @return ListIdMappingWorkflowsResponse
     */
    public function listIdMappingWorkflows(ListIdMappingWorkflowsRequest $args)
    {
        $result = parent::listIdMappingWorkflows($args->toArray());
        return new ListIdMappingWorkflowsResponse($result->toArray());
    }
}
