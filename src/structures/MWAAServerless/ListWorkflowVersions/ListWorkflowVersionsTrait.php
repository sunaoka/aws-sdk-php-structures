<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListWorkflowVersions;

trait ListWorkflowVersionsTrait
{
    /**
     * @param ListWorkflowVersionsRequest $args
     * @return ListWorkflowVersionsResponse
     */
    public function listWorkflowVersions(ListWorkflowVersionsRequest $args)
    {
        $result = parent::listWorkflowVersions($args->toArray());
        return new ListWorkflowVersionsResponse($result->toArray());
    }
}
