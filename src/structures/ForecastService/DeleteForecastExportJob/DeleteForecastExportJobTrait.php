<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteForecastExportJob;

trait DeleteForecastExportJobTrait
{
    /**
     * @param DeleteForecastExportJobRequest $args
     * @return void
     */
    public function deleteForecastExportJob(DeleteForecastExportJobRequest $args)
    {
        parent::deleteForecastExportJob($args->toArray());
    }
}
