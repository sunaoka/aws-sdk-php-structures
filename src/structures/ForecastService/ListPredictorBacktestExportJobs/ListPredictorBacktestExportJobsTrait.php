<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictorBacktestExportJobs;

trait ListPredictorBacktestExportJobsTrait
{
    /**
     * @param ListPredictorBacktestExportJobsRequest $args
     * @return ListPredictorBacktestExportJobsResponse
     */
    public function listPredictorBacktestExportJobs(ListPredictorBacktestExportJobsRequest $args)
    {
        $result = parent::listPredictorBacktestExportJobs($args->toArray());
        return new ListPredictorBacktestExportJobsResponse($result->toArray());
    }
}
