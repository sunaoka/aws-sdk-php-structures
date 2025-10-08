<?php

namespace Sunaoka\Aws\Structures\Sts\GetSessionToken;

trait GetSessionTokenTrait
{
    /**
     * @param GetSessionTokenRequest $args
     * @return GetSessionTokenResponse
     */
    public function getSessionToken(GetSessionTokenRequest $args)
    {
        $result = parent::getSessionToken($args->toArray());
        return new GetSessionTokenResponse($result->toArray());
    }
}
