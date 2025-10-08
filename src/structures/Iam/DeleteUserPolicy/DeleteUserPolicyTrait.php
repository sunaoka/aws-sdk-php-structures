<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteUserPolicy;

trait DeleteUserPolicyTrait
{
    /**
     * @param DeleteUserPolicyRequest $args
     * @return void
     */
    public function deleteUserPolicy(DeleteUserPolicyRequest $args)
    {
        parent::deleteUserPolicy($args->toArray());
    }
}
