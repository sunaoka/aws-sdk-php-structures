<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking;

trait GetPersonTrackingTrait
{
    /**
     * @param GetPersonTrackingRequest $args
     * @return GetPersonTrackingResponse
     */
    public function getPersonTracking(GetPersonTrackingRequest $args)
    {
        $result = parent::getPersonTracking($args->toArray());
        return new GetPersonTrackingResponse($result->toArray());
    }
}
