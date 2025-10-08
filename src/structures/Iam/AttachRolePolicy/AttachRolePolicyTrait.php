<?php

namespace Sunaoka\Aws\Structures\Iam\AttachRolePolicy;

trait AttachRolePolicyTrait
{
    /**
     * @param AttachRolePolicyRequest $args
     * @return void
     */
    public function attachRolePolicy(AttachRolePolicyRequest $args)
    {
        parent::attachRolePolicy($args->toArray());
    }
}
