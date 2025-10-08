<?php

namespace Sunaoka\Aws\Structures\Swf\ListWorkflowTypes;

trait ListWorkflowTypesTrait
{
    /**
     * @param ListWorkflowTypesRequest $args
     * @return ListWorkflowTypesResponse
     */
    public function listWorkflowTypes(ListWorkflowTypesRequest $args)
    {
        $result = parent::listWorkflowTypes($args->toArray());
        return new ListWorkflowTypesResponse($result->toArray());
    }
}
