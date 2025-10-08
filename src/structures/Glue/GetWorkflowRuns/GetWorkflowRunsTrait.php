<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns;

trait GetWorkflowRunsTrait
{
    /**
     * @param GetWorkflowRunsRequest $args
     * @return GetWorkflowRunsResponse
     */
    public function getWorkflowRuns(GetWorkflowRunsRequest $args)
    {
        $result = parent::getWorkflowRuns($args->toArray());
        return new GetWorkflowRunsResponse($result->toArray());
    }
}
