<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetTrailStatus;

trait GetTrailStatusTrait
{
    /**
     * @param GetTrailStatusRequest $args
     * @return GetTrailStatusResponse
     */
    public function getTrailStatus(GetTrailStatusRequest $args)
    {
        $result = parent::getTrailStatus($args->toArray());
        return new GetTrailStatusResponse($result->toArray());
    }
}
