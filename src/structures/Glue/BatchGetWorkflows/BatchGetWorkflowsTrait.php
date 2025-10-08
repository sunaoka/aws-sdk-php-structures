<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows;

trait BatchGetWorkflowsTrait
{
    /**
     * @param BatchGetWorkflowsRequest $args
     * @return BatchGetWorkflowsResponse
     */
    public function batchGetWorkflows(BatchGetWorkflowsRequest $args)
    {
        $result = parent::batchGetWorkflows($args->toArray());
        return new BatchGetWorkflowsResponse($result->toArray());
    }
}
