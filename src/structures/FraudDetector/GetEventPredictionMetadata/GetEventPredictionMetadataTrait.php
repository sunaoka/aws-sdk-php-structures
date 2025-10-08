<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata;

trait GetEventPredictionMetadataTrait
{
    /**
     * @param GetEventPredictionMetadataRequest $args
     * @return GetEventPredictionMetadataResponse
     */
    public function getEventPredictionMetadata(GetEventPredictionMetadataRequest $args)
    {
        $result = parent::getEventPredictionMetadata($args->toArray());
        return new GetEventPredictionMetadataResponse($result->toArray());
    }
}
