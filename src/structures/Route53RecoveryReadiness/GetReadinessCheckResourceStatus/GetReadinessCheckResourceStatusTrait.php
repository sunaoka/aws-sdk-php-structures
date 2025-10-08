<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckResourceStatus;

trait GetReadinessCheckResourceStatusTrait
{
    /**
     * @param GetReadinessCheckResourceStatusRequest $args
     * @return GetReadinessCheckResourceStatusResponse
     */
    public function getReadinessCheckResourceStatus(GetReadinessCheckResourceStatusRequest $args)
    {
        $result = parent::getReadinessCheckResourceStatus($args->toArray());
        return new GetReadinessCheckResourceStatusResponse($result->toArray());
    }
}
