<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUserGlobalSignOut;

trait AdminUserGlobalSignOutTrait
{
    /**
     * @param AdminUserGlobalSignOutRequest $args
     * @return AdminUserGlobalSignOutResponse
     */
    public function adminUserGlobalSignOut(AdminUserGlobalSignOutRequest $args)
    {
        $result = parent::adminUserGlobalSignOut($args->toArray());
        return new AdminUserGlobalSignOutResponse($result->toArray());
    }
}
