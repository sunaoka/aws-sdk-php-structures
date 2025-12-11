<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListWorkflowRuns;

trait ListWorkflowRunsTrait
{
    /**
     * @param ListWorkflowRunsRequest $args
     * @return ListWorkflowRunsResponse
     */
    public function listWorkflowRuns(ListWorkflowRunsRequest $args)
    {
        $result = parent::listWorkflowRuns($args->toArray());
        return new ListWorkflowRunsResponse($result->toArray());
    }
}
