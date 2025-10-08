<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentImportJobs;

trait GetSegmentImportJobsTrait
{
    /**
     * @param GetSegmentImportJobsRequest $args
     * @return GetSegmentImportJobsResponse
     */
    public function getSegmentImportJobs(GetSegmentImportJobsRequest $args)
    {
        $result = parent::getSegmentImportJobs($args->toArray());
        return new GetSegmentImportJobsResponse($result->toArray());
    }
}
