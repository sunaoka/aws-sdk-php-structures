<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor;

trait CreatePredictorTrait
{
    /**
     * @param CreatePredictorRequest $args
     * @return CreatePredictorResponse
     */
    public function createPredictor(CreatePredictorRequest $args)
    {
        $result = parent::createPredictor($args->toArray());
        return new CreatePredictorResponse($result->toArray());
    }
}
