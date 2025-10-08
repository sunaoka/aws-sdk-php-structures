<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckStatus;

trait GetHealthCheckStatusTrait
{
    /**
     * @param GetHealthCheckStatusRequest $args
     * @return GetHealthCheckStatusResponse
     */
    public function getHealthCheckStatus(GetHealthCheckStatusRequest $args)
    {
        $result = parent::getHealthCheckStatus($args->toArray());
        return new GetHealthCheckStatusResponse($result->toArray());
    }
}
