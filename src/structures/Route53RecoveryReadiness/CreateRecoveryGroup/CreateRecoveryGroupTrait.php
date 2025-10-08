<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateRecoveryGroup;

trait CreateRecoveryGroupTrait
{
    /**
     * @param CreateRecoveryGroupRequest $args
     * @return CreateRecoveryGroupResponse
     */
    public function createRecoveryGroup(CreateRecoveryGroupRequest $args)
    {
        $result = parent::createRecoveryGroup($args->toArray());
        return new CreateRecoveryGroupResponse($result->toArray());
    }
}
