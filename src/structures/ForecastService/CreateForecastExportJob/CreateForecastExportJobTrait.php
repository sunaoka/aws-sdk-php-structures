<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateForecastExportJob;

trait CreateForecastExportJobTrait
{
    /**
     * @param CreateForecastExportJobRequest $args
     * @return CreateForecastExportJobResponse
     */
    public function createForecastExportJob(CreateForecastExportJobRequest $args)
    {
        $result = parent::createForecastExportJob($args->toArray());
        return new CreateForecastExportJobResponse($result->toArray());
    }
}
