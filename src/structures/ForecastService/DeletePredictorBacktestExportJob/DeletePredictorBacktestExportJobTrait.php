<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeletePredictorBacktestExportJob;

trait DeletePredictorBacktestExportJobTrait
{
    /**
     * @param DeletePredictorBacktestExportJobRequest $args
     * @return void
     */
    public function deletePredictorBacktestExportJob(DeletePredictorBacktestExportJobRequest $args)
    {
        parent::deletePredictorBacktestExportJob($args->toArray());
    }
}
