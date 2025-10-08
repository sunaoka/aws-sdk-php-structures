<?php

namespace Sunaoka\Aws\Structures\Iam\TagRole;

trait TagRoleTrait
{
    /**
     * @param TagRoleRequest $args
     * @return void
     */
    public function tagRole(TagRoleRequest $args)
    {
        parent::tagRole($args->toArray());
    }
}
