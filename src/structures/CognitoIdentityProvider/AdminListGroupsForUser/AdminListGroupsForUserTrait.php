<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListGroupsForUser;

trait AdminListGroupsForUserTrait
{
    /**
     * @param AdminListGroupsForUserRequest $args
     * @return AdminListGroupsForUserResponse
     */
    public function adminListGroupsForUser(AdminListGroupsForUserRequest $args)
    {
        $result = parent::adminListGroupsForUser($args->toArray());
        return new AdminListGroupsForUserResponse($result->toArray());
    }
}
