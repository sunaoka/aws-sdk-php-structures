<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeletePredictor;

trait DeletePredictorTrait
{
    /**
     * @param DeletePredictorRequest $args
     * @return void
     */
    public function deletePredictor(DeletePredictorRequest $args)
    {
        parent::deletePredictor($args->toArray());
    }
}
