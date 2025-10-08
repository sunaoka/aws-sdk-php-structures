<?php

namespace Sunaoka\Aws\Structures\Iam\UntagRole;

trait UntagRoleTrait
{
    /**
     * @param UntagRoleRequest $args
     * @return void
     */
    public function untagRole(UntagRoleRequest $args)
    {
        parent::untagRole($args->toArray());
    }
}
