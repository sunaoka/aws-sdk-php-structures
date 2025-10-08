<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions;

trait AcceptPredictionsTrait
{
    /**
     * @param AcceptPredictionsRequest $args
     * @return AcceptPredictionsResponse
     */
    public function acceptPredictions(AcceptPredictionsRequest $args)
    {
        $result = parent::acceptPredictions($args->toArray());
        return new AcceptPredictionsResponse($result->toArray());
    }
}
