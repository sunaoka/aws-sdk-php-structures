<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictorBacktestExportJob;

trait CreatePredictorBacktestExportJobTrait
{
    /**
     * @param CreatePredictorBacktestExportJobRequest $args
     * @return CreatePredictorBacktestExportJobResponse
     */
    public function createPredictorBacktestExportJob(CreatePredictorBacktestExportJobRequest $args)
    {
        $result = parent::createPredictorBacktestExportJob($args->toArray());
        return new CreatePredictorBacktestExportJobResponse($result->toArray());
    }
}
