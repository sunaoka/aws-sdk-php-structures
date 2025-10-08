<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRemoveUserFromGroup;

trait AdminRemoveUserFromGroupTrait
{
    /**
     * @param AdminRemoveUserFromGroupRequest $args
     * @return void
     */
    public function adminRemoveUserFromGroup(AdminRemoveUserFromGroupRequest $args)
    {
        parent::adminRemoveUserFromGroup($args->toArray());
    }
}
