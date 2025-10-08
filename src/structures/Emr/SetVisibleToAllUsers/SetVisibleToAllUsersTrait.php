<?php

namespace Sunaoka\Aws\Structures\Emr\SetVisibleToAllUsers;

trait SetVisibleToAllUsersTrait
{
    /**
     * @param SetVisibleToAllUsersRequest $args
     * @return void
     */
    public function setVisibleToAllUsers(SetVisibleToAllUsersRequest $args)
    {
        parent::setVisibleToAllUsers($args->toArray());
    }
}
