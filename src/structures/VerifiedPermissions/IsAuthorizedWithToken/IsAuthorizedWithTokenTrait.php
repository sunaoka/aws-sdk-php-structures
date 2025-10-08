<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorizedWithToken;

trait IsAuthorizedWithTokenTrait
{
    /**
     * @param IsAuthorizedWithTokenRequest $args
     * @return IsAuthorizedWithTokenResponse
     */
    public function isAuthorizedWithToken(IsAuthorizedWithTokenRequest $args)
    {
        $result = parent::isAuthorizedWithToken($args->toArray());
        return new IsAuthorizedWithTokenResponse($result->toArray());
    }
}
