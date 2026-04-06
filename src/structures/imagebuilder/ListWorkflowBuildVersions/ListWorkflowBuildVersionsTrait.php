<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions;

trait ListWorkflowBuildVersionsTrait
{
    /**
     * @param ListWorkflowBuildVersionsRequest $args
     * @return ListWorkflowBuildVersionsResponse
     */
    public function listWorkflowBuildVersions(ListWorkflowBuildVersionsRequest $args)
    {
        $result = parent::listWorkflowBuildVersions($args->toArray());
        return new ListWorkflowBuildVersionsResponse($result->toArray());
    }
}
