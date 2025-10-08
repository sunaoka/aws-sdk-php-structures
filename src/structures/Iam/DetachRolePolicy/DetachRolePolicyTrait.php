<?php

namespace Sunaoka\Aws\Structures\Iam\DetachRolePolicy;

trait DetachRolePolicyTrait
{
    /**
     * @param DetachRolePolicyRequest $args
     * @return void
     */
    public function detachRolePolicy(DetachRolePolicyRequest $args)
    {
        parent::detachRolePolicy($args->toArray());
    }
}
