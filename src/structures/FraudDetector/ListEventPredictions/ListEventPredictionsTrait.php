<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListEventPredictions;

trait ListEventPredictionsTrait
{
    /**
     * @param ListEventPredictionsRequest $args
     * @return ListEventPredictionsResponse
     */
    public function listEventPredictions(ListEventPredictionsRequest $args)
    {
        $result = parent::listEventPredictions($args->toArray());
        return new ListEventPredictionsResponse($result->toArray());
    }
}
