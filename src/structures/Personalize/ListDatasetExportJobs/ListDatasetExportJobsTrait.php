<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetExportJobs;

trait ListDatasetExportJobsTrait
{
    /**
     * @param ListDatasetExportJobsRequest $args
     * @return ListDatasetExportJobsResponse
     */
    public function listDatasetExportJobs(ListDatasetExportJobsRequest $args)
    {
        $result = parent::listDatasetExportJobs($args->toArray());
        return new ListDatasetExportJobsResponse($result->toArray());
    }
}
