<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteRecoveryGroup;

trait DeleteRecoveryGroupTrait
{
    /**
     * @param DeleteRecoveryGroupRequest $args
     * @return void
     */
    public function deleteRecoveryGroup(DeleteRecoveryGroupRequest $args)
    {
        parent::deleteRecoveryGroup($args->toArray());
    }
}
