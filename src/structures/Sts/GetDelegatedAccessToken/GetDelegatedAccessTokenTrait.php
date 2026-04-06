<?php

namespace Sunaoka\Aws\Structures\Sts\GetDelegatedAccessToken;

trait GetDelegatedAccessTokenTrait
{
    /**
     * @param GetDelegatedAccessTokenRequest $args
     * @return GetDelegatedAccessTokenResponse
     */
    public function getDelegatedAccessToken(GetDelegatedAccessTokenRequest $args)
    {
        $result = parent::getDelegatedAccessToken($args->toArray());
        return new GetDelegatedAccessTokenResponse($result->toArray());
    }
}
