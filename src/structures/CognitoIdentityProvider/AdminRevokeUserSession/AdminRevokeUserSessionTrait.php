<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRevokeUserSession;

trait AdminRevokeUserSessionTrait
{
    /**
     * @param AdminRevokeUserSessionRequest $args
     * @return AdminRevokeUserSessionResponse
     */
    public function adminRevokeUserSession(AdminRevokeUserSessionRequest $args)
    {
        $result = parent::adminRevokeUserSession($args->toArray());
        return new AdminRevokeUserSessionResponse($result->toArray());
    }
}
