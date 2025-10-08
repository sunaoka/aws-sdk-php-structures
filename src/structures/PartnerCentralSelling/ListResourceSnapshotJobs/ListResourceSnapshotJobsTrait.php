<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs;

trait ListResourceSnapshotJobsTrait
{
    /**
     * @param ListResourceSnapshotJobsRequest $args
     * @return ListResourceSnapshotJobsResponse
     */
    public function listResourceSnapshotJobs(ListResourceSnapshotJobsRequest $args)
    {
        $result = parent::listResourceSnapshotJobs($args->toArray());
        return new ListResourceSnapshotJobsResponse($result->toArray());
    }
}
