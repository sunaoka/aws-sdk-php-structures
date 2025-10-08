<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryWhatIfForecast;

trait QueryWhatIfForecastTrait
{
    /**
     * @param QueryWhatIfForecastRequest $args
     * @return QueryWhatIfForecastResponse
     */
    public function queryWhatIfForecast(QueryWhatIfForecastRequest $args)
    {
        $result = parent::queryWhatIfForecast($args->toArray());
        return new QueryWhatIfForecastResponse($result->toArray());
    }
}
