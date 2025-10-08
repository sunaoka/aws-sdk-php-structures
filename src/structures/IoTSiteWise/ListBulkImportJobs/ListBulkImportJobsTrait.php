<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListBulkImportJobs;

trait ListBulkImportJobsTrait
{
    /**
     * @param ListBulkImportJobsRequest $args
     * @return ListBulkImportJobsResponse
     */
    public function listBulkImportJobs(ListBulkImportJobsRequest $args)
    {
        $result = parent::listBulkImportJobs($args->toArray());
        return new ListBulkImportJobsResponse($result->toArray());
    }
}
