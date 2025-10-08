<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecast;

trait DescribeForecastTrait
{
    /**
     * @param DescribeForecastRequest $args
     * @return DescribeForecastResponse
     */
    public function describeForecast(DescribeForecastRequest $args)
    {
        $result = parent::describeForecast($args->toArray());
        return new DescribeForecastResponse($result->toArray());
    }
}
