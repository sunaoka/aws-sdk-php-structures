<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModelJobs;

trait ListThreatModelJobsTrait
{
    /**
     * @param ListThreatModelJobsRequest $args
     * @return ListThreatModelJobsResponse
     */
    public function listThreatModelJobs(ListThreatModelJobsRequest $args)
    {
        $result = parent::listThreatModelJobs($args->toArray());
        return new ListThreatModelJobsResponse($result->toArray());
    }
}
