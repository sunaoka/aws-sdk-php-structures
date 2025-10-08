<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction;

trait GetEventPredictionTrait
{
    /**
     * @param GetEventPredictionRequest $args
     * @return GetEventPredictionResponse
     */
    public function getEventPrediction(GetEventPredictionRequest $args)
    {
        $result = parent::getEventPrediction($args->toArray());
        return new GetEventPredictionResponse($result->toArray());
    }
}
