<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchResultExportJobs;

trait ListSearchResultExportJobsTrait
{
    /**
     * @param ListSearchResultExportJobsRequest $args
     * @return ListSearchResultExportJobsResponse
     */
    public function listSearchResultExportJobs(ListSearchResultExportJobsRequest $args)
    {
        $result = parent::listSearchResultExportJobs($args->toArray());
        return new ListSearchResultExportJobsResponse($result->toArray());
    }
}
