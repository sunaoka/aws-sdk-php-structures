<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionJobs;

trait ListRemoteSourceActionJobsTrait
{
    /**
     * @param ListRemoteSourceActionJobsRequest $args
     * @return ListRemoteSourceActionJobsResponse
     */
    public function listRemoteSourceActionJobs(ListRemoteSourceActionJobsRequest $args)
    {
        $result = parent::listRemoteSourceActionJobs($args->toArray());
        return new ListRemoteSourceActionJobsResponse($result->toArray());
    }
}
