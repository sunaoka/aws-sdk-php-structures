<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAccessToken;

trait GetAccessTokenTrait
{
    /**
     * @param GetAccessTokenRequest $args
     * @return GetAccessTokenResponse
     */
    public function getAccessToken(GetAccessTokenRequest $args)
    {
        $result = parent::getAccessToken($args->toArray());
        return new GetAccessTokenResponse($result->toArray());
    }
}
