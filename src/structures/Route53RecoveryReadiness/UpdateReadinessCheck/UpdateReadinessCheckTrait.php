<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateReadinessCheck;

trait UpdateReadinessCheckTrait
{
    /**
     * @param UpdateReadinessCheckRequest $args
     * @return UpdateReadinessCheckResponse
     */
    public function updateReadinessCheck(UpdateReadinessCheckRequest $args)
    {
        $result = parent::updateReadinessCheck($args->toArray());
        return new UpdateReadinessCheckResponse($result->toArray());
    }
}
