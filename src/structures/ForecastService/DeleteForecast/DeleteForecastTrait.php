<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteForecast;

trait DeleteForecastTrait
{
    /**
     * @param DeleteForecastRequest $args
     * @return void
     */
    public function deleteForecast(DeleteForecastRequest $args)
    {
        parent::deleteForecast($args->toArray());
    }
}
