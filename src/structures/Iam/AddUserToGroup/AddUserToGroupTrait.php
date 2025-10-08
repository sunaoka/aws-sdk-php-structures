<?php

namespace Sunaoka\Aws\Structures\Iam\AddUserToGroup;

trait AddUserToGroupTrait
{
    /**
     * @param AddUserToGroupRequest $args
     * @return void
     */
    public function addUserToGroup(AddUserToGroupRequest $args)
    {
        parent::addUserToGroup($args->toArray());
    }
}
