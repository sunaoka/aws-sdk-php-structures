<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheck;

trait GetReadinessCheckTrait
{
    /**
     * @param GetReadinessCheckRequest $args
     * @return GetReadinessCheckResponse
     */
    public function getReadinessCheck(GetReadinessCheckRequest $args)
    {
        $result = parent::getReadinessCheck($args->toArray());
        return new GetReadinessCheckResponse($result->toArray());
    }
}
