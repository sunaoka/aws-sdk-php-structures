<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetRecoveryGroup;

trait GetRecoveryGroupTrait
{
    /**
     * @param GetRecoveryGroupRequest $args
     * @return GetRecoveryGroupResponse
     */
    public function getRecoveryGroup(GetRecoveryGroupRequest $args)
    {
        $result = parent::getRecoveryGroup($args->toArray());
        return new GetRecoveryGroupResponse($result->toArray());
    }
}
