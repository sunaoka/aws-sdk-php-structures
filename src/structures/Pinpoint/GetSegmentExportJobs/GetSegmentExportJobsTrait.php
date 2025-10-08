<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentExportJobs;

trait GetSegmentExportJobsTrait
{
    /**
     * @param GetSegmentExportJobsRequest $args
     * @return GetSegmentExportJobsResponse
     */
    public function getSegmentExportJobs(GetSegmentExportJobsRequest $args)
    {
        $result = parent::getSegmentExportJobs($args->toArray());
        return new GetSegmentExportJobsResponse($result->toArray());
    }
}
