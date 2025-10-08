<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminAddUserToGroup;

trait AdminAddUserToGroupTrait
{
    /**
     * @param AdminAddUserToGroupRequest $args
     * @return void
     */
    public function adminAddUserToGroup(AdminAddUserToGroupRequest $args)
    {
        parent::adminAddUserToGroup($args->toArray());
    }
}
