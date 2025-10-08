<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListForecastExportJobs;

trait ListForecastExportJobsTrait
{
    /**
     * @param ListForecastExportJobsRequest $args
     * @return ListForecastExportJobsResponse
     */
    public function listForecastExportJobs(ListForecastExportJobsRequest $args)
    {
        $result = parent::listForecastExportJobs($args->toArray());
        return new ListForecastExportJobsResponse($result->toArray());
    }
}
