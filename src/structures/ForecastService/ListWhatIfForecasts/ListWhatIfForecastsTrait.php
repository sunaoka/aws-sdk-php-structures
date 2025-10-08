<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfForecasts;

trait ListWhatIfForecastsTrait
{
    /**
     * @param ListWhatIfForecastsRequest $args
     * @return ListWhatIfForecastsResponse
     */
    public function listWhatIfForecasts(ListWhatIfForecastsRequest $args)
    {
        $result = parent::listWhatIfForecasts($args->toArray());
        return new ListWhatIfForecastsResponse($result->toArray());
    }
}
