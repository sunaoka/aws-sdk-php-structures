<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteWhatIfForecastExport;

trait DeleteWhatIfForecastExportTrait
{
    /**
     * @param DeleteWhatIfForecastExportRequest $args
     * @return void
     */
    public function deleteWhatIfForecastExport(DeleteWhatIfForecastExportRequest $args)
    {
        parent::deleteWhatIfForecastExport($args->toArray());
    }
}
