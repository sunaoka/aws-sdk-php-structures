<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminLinkProviderForUser;

trait AdminLinkProviderForUserTrait
{
    /**
     * @param AdminLinkProviderForUserRequest $args
     * @return AdminLinkProviderForUserResponse
     */
    public function adminLinkProviderForUser(AdminLinkProviderForUserRequest $args)
    {
        $result = parent::adminLinkProviderForUser($args->toArray());
        return new AdminLinkProviderForUserResponse($result->toArray());
    }
}
