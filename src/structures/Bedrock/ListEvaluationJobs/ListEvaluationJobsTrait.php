<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEvaluationJobs;

trait ListEvaluationJobsTrait
{
    /**
     * @param ListEvaluationJobsRequest $args
     * @return ListEvaluationJobsResponse
     */
    public function listEvaluationJobs(ListEvaluationJobsRequest $args)
    {
        $result = parent::listEvaluationJobs($args->toArray());
        return new ListEvaluationJobsResponse($result->toArray());
    }
}
