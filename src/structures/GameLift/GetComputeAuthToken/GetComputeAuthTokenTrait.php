<?php

namespace Sunaoka\Aws\Structures\GameLift\GetComputeAuthToken;

trait GetComputeAuthTokenTrait
{
    /**
     * @param GetComputeAuthTokenRequest $args
     * @return GetComputeAuthTokenResponse
     */
    public function getComputeAuthToken(GetComputeAuthTokenRequest $args)
    {
        $result = parent::getComputeAuthToken($args->toArray());
        return new GetComputeAuthTokenResponse($result->toArray());
    }
}
