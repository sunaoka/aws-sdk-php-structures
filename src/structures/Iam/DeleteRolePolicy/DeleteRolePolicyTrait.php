<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteRolePolicy;

trait DeleteRolePolicyTrait
{
    /**
     * @param DeleteRolePolicyRequest $args
     * @return void
     */
    public function deleteRolePolicy(DeleteRolePolicyRequest $args)
    {
        parent::deleteRolePolicy($args->toArray());
    }
}
