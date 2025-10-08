<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDisableProviderForUser;

trait AdminDisableProviderForUserTrait
{
    /**
     * @param AdminDisableProviderForUserRequest $args
     * @return AdminDisableProviderForUserResponse
     */
    public function adminDisableProviderForUser(AdminDisableProviderForUserRequest $args)
    {
        $result = parent::adminDisableProviderForUser($args->toArray());
        return new AdminDisableProviderForUserResponse($result->toArray());
    }
}
