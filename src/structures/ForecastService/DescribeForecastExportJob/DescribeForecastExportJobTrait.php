<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecastExportJob;

trait DescribeForecastExportJobTrait
{
    /**
     * @param DescribeForecastExportJobRequest $args
     * @return DescribeForecastExportJobResponse
     */
    public function describeForecastExportJob(DescribeForecastExportJobRequest $args)
    {
        $result = parent::describeForecastExportJob($args->toArray());
        return new DescribeForecastExportJobResponse($result->toArray());
    }
}
