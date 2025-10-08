<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\RotateTunnelAccessToken;

trait RotateTunnelAccessTokenTrait
{
    /**
     * @param RotateTunnelAccessTokenRequest $args
     * @return RotateTunnelAccessTokenResponse
     */
    public function rotateTunnelAccessToken(RotateTunnelAccessTokenRequest $args)
    {
        $result = parent::rotateTunnelAccessToken($args->toArray());
        return new RotateTunnelAccessTokenResponse($result->toArray());
    }
}
