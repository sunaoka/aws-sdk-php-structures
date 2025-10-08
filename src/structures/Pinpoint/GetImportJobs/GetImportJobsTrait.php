<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetImportJobs;

trait GetImportJobsTrait
{
    /**
     * @param GetImportJobsRequest $args
     * @return GetImportJobsResponse
     */
    public function getImportJobs(GetImportJobsRequest $args)
    {
        $result = parent::getImportJobs($args->toArray());
        return new GetImportJobsResponse($result->toArray());
    }
}
