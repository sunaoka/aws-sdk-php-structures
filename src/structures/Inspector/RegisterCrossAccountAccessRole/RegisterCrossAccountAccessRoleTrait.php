<?php

namespace Sunaoka\Aws\Structures\Inspector\RegisterCrossAccountAccessRole;

trait RegisterCrossAccountAccessRoleTrait
{
    /**
     * @param RegisterCrossAccountAccessRoleRequest $args
     * @return void
     */
    public function registerCrossAccountAccessRole(RegisterCrossAccountAccessRoleRequest $args)
    {
        parent::registerCrossAccountAccessRole($args->toArray());
    }
}
