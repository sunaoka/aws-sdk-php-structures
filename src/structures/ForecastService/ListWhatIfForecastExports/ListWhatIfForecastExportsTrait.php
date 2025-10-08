<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfForecastExports;

trait ListWhatIfForecastExportsTrait
{
    /**
     * @param ListWhatIfForecastExportsRequest $args
     * @return ListWhatIfForecastExportsResponse
     */
    public function listWhatIfForecastExports(ListWhatIfForecastExportsRequest $args)
    {
        $result = parent::listWhatIfForecastExports($args->toArray());
        return new ListWhatIfForecastExportsResponse($result->toArray());
    }
}
