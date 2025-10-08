<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateRecoveryGroup;

trait UpdateRecoveryGroupTrait
{
    /**
     * @param UpdateRecoveryGroupRequest $args
     * @return UpdateRecoveryGroupResponse
     */
    public function updateRecoveryGroup(UpdateRecoveryGroupRequest $args)
    {
        $result = parent::updateRecoveryGroup($args->toArray());
        return new UpdateRecoveryGroupResponse($result->toArray());
    }
}
