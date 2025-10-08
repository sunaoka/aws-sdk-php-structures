<?php

namespace Sunaoka\Aws\Structures\ECRPublic\GetAuthorizationToken;

trait GetAuthorizationTokenTrait
{
    /**
     * @param GetAuthorizationTokenRequest $args
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationToken(GetAuthorizationTokenRequest $args)
    {
        $result = parent::getAuthorizationToken($args->toArray());
        return new GetAuthorizationTokenResponse($result->toArray());
    }
}
