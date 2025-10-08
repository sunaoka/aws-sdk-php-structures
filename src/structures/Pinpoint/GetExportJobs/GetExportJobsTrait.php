<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetExportJobs;

trait GetExportJobsTrait
{
    /**
     * @param GetExportJobsRequest $args
     * @return GetExportJobsResponse
     */
    public function getExportJobs(GetExportJobsRequest $args)
    {
        $result = parent::getExportJobs($args->toArray());
        return new GetExportJobsResponse($result->toArray());
    }
}
