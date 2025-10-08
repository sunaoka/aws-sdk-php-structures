<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartPersonTracking;

trait StartPersonTrackingTrait
{
    /**
     * @param StartPersonTrackingRequest $args
     * @return StartPersonTrackingResponse
     */
    public function startPersonTracking(StartPersonTrackingRequest $args)
    {
        $result = parent::startPersonTracking($args->toArray());
        return new StartPersonTrackingResponse($result->toArray());
    }
}
