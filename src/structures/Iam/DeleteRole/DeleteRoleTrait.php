<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteRole;

trait DeleteRoleTrait
{
    /**
     * @param DeleteRoleRequest $args
     * @return void
     */
    public function deleteRole(DeleteRoleRequest $args)
    {
        parent::deleteRole($args->toArray());
    }
}
