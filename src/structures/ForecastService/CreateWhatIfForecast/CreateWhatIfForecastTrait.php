<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecast;

trait CreateWhatIfForecastTrait
{
    /**
     * @param CreateWhatIfForecastRequest $args
     * @return CreateWhatIfForecastResponse
     */
    public function createWhatIfForecast(CreateWhatIfForecastRequest $args)
    {
        $result = parent::createWhatIfForecast($args->toArray());
        return new CreateWhatIfForecastResponse($result->toArray());
    }
}
