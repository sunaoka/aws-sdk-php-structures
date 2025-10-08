<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListHarvestJobs;

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
