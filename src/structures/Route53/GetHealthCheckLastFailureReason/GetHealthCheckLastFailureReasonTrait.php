<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckLastFailureReason;

trait GetHealthCheckLastFailureReasonTrait
{
    /**
     * @param GetHealthCheckLastFailureReasonRequest $args
     * @return GetHealthCheckLastFailureReasonResponse
     */
    public function getHealthCheckLastFailureReason(GetHealthCheckLastFailureReasonRequest $args)
    {
        $result = parent::getHealthCheckLastFailureReason($args->toArray());
        return new GetHealthCheckLastFailureReasonResponse($result->toArray());
    }
}
