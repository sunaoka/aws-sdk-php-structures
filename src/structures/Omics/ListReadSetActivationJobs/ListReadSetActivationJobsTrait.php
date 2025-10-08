<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetActivationJobs;

trait ListReadSetActivationJobsTrait
{
    /**
     * @param ListReadSetActivationJobsRequest $args
     * @return ListReadSetActivationJobsResponse
     */
    public function listReadSetActivationJobs(ListReadSetActivationJobsRequest $args)
    {
        $result = parent::listReadSetActivationJobs($args->toArray());
        return new ListReadSetActivationJobsResponse($result->toArray());
    }
}
