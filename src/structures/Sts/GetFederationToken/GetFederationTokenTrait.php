<?php

namespace Sunaoka\Aws\Structures\Sts\GetFederationToken;

trait GetFederationTokenTrait
{
    /**
     * @param GetFederationTokenRequest $args
     * @return GetFederationTokenResponse
     */
    public function getFederationToken(GetFederationTokenRequest $args)
    {
        $result = parent::getFederationToken($args->toArray());
        return new GetFederationTokenResponse($result->toArray());
    }
}
