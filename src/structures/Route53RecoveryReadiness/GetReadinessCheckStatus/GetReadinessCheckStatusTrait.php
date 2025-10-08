<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckStatus;

trait GetReadinessCheckStatusTrait
{
    /**
     * @param GetReadinessCheckStatusRequest $args
     * @return GetReadinessCheckStatusResponse
     */
    public function getReadinessCheckStatus(GetReadinessCheckStatusRequest $args)
    {
        $result = parent::getReadinessCheckStatus($args->toArray());
        return new GetReadinessCheckStatusResponse($result->toArray());
    }
}
