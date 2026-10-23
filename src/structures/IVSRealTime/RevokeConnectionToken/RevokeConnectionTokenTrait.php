<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\RevokeConnectionToken;

trait RevokeConnectionTokenTrait
{
    /**
     * @param RevokeConnectionTokenRequest $args
     * @return RevokeConnectionTokenResponse
     */
    public function revokeConnectionToken(RevokeConnectionTokenRequest $args)
    {
        $result = parent::revokeConnectionToken($args->toArray());
        return new RevokeConnectionTokenResponse($result->toArray());
    }
}
