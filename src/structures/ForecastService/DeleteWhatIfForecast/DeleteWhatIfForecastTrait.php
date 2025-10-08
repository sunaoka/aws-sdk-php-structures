<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteWhatIfForecast;

trait DeleteWhatIfForecastTrait
{
    /**
     * @param DeleteWhatIfForecastRequest $args
     * @return void
     */
    public function deleteWhatIfForecast(DeleteWhatIfForecastRequest $args)
    {
        parent::deleteWhatIfForecast($args->toArray());
    }
}
