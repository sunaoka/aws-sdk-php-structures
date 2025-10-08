<?php

namespace Sunaoka\Aws\Structures\Panorama\ListPackageImportJobs;

trait ListPackageImportJobsTrait
{
    /**
     * @param ListPackageImportJobsRequest $args
     * @return ListPackageImportJobsResponse
     */
    public function listPackageImportJobs(ListPackageImportJobsRequest $args)
    {
        $result = parent::listPackageImportJobs($args->toArray());
        return new ListPackageImportJobsResponse($result->toArray());
    }
}
