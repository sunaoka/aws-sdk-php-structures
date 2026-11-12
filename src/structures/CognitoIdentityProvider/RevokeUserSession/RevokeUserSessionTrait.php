<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RevokeUserSession;

trait RevokeUserSessionTrait
{
    /**
     * @param RevokeUserSessionRequest $args
     * @return RevokeUserSessionResponse
     */
    public function revokeUserSession(RevokeUserSessionRequest $args)
    {
        $result = parent::revokeUserSession($args->toArray());
        return new RevokeUserSessionResponse($result->toArray());
    }
}
