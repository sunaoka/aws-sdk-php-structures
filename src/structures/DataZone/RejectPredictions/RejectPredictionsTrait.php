<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectPredictions;

trait RejectPredictionsTrait
{
    /**
     * @param RejectPredictionsRequest $args
     * @return RejectPredictionsResponse
     */
    public function rejectPredictions(RejectPredictionsRequest $args)
    {
        $result = parent::rejectPredictions($args->toArray());
        return new RejectPredictionsResponse($result->toArray());
    }
}
