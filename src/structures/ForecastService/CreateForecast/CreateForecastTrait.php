<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateForecast;

trait CreateForecastTrait
{
    /**
     * @param CreateForecastRequest $args
     * @return CreateForecastResponse
     */
    public function createForecast(CreateForecastRequest $args)
    {
        $result = parent::createForecast($args->toArray());
        return new CreateForecastResponse($result->toArray());
    }
}
