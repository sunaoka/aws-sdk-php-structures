<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelInvocationJobs;

trait ListModelInvocationJobsTrait
{
    /**
     * @param ListModelInvocationJobsRequest $args
     * @return ListModelInvocationJobsResponse
     */
    public function listModelInvocationJobs(ListModelInvocationJobsRequest $args)
    {
        $result = parent::listModelInvocationJobs($args->toArray());
        return new ListModelInvocationJobsResponse($result->toArray());
    }
}
