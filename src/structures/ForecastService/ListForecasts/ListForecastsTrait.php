<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListForecasts;

trait ListForecastsTrait
{
    /**
     * @param ListForecastsRequest $args
     * @return ListForecastsResponse
     */
    public function listForecasts(ListForecastsRequest $args)
    {
        $result = parent::listForecasts($args->toArray());
        return new ListForecastsResponse($result->toArray());
    }
}
