<?php

namespace Sunaoka\Aws\Structures\Sts\GetWebIdentityToken;

trait GetWebIdentityTokenTrait
{
    /**
     * @param GetWebIdentityTokenRequest $args
     * @return GetWebIdentityTokenResponse
     */
    public function getWebIdentityToken(GetWebIdentityTokenRequest $args)
    {
        $result = parent::getWebIdentityToken($args->toArray());
        return new GetWebIdentityTokenResponse($result->toArray());
    }
}
