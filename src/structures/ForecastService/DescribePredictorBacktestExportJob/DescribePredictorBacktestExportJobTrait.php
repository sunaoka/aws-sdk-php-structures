<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictorBacktestExportJob;

trait DescribePredictorBacktestExportJobTrait
{
    /**
     * @param DescribePredictorBacktestExportJobRequest $args
     * @return DescribePredictorBacktestExportJobResponse
     */
    public function describePredictorBacktestExportJob(DescribePredictorBacktestExportJobRequest $args)
    {
        $result = parent::describePredictorBacktestExportJob($args->toArray());
        return new DescribePredictorBacktestExportJobResponse($result->toArray());
    }
}
