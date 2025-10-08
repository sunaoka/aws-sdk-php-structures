<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasetImportJobs;

trait ListDatasetImportJobsTrait
{
    /**
     * @param ListDatasetImportJobsRequest $args
     * @return ListDatasetImportJobsResponse
     */
    public function listDatasetImportJobs(ListDatasetImportJobsRequest $args)
    {
        $result = parent::listDatasetImportJobs($args->toArray());
        return new ListDatasetImportJobsResponse($result->toArray());
    }
}
