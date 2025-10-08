<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecastExport;

trait CreateWhatIfForecastExportTrait
{
    /**
     * @param CreateWhatIfForecastExportRequest $args
     * @return CreateWhatIfForecastExportResponse
     */
    public function createWhatIfForecastExport(CreateWhatIfForecastExportRequest $args)
    {
        $result = parent::createWhatIfForecastExport($args->toArray());
        return new CreateWhatIfForecastExportResponse($result->toArray());
    }
}
