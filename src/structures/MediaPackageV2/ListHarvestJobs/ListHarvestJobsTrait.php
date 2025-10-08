<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListHarvestJobs;

trait ListHarvestJobsTrait
{
    /**
     * @param ListHarvestJobsRequest $args
     * @return ListHarvestJobsResponse
     */
    public function listHarvestJobs(ListHarvestJobsRequest $args)
    {
        $result = parent::listHarvestJobs($args->toArray());
        return new ListHarvestJobsResponse($result->toArray());
    }
}
