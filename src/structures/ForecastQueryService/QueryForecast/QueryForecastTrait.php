<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryForecast;

trait QueryForecastTrait
{
    /**
     * @param QueryForecastRequest $args
     * @return QueryForecastResponse
     */
    public function queryForecast(QueryForecastRequest $args)
    {
        $result = parent::queryForecast($args->toArray());
        return new QueryForecastResponse($result->toArray());
    }
}
