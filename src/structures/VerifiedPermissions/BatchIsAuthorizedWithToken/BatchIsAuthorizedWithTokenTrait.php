<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken;

trait BatchIsAuthorizedWithTokenTrait
{
    /**
     * @param BatchIsAuthorizedWithTokenRequest $args
     * @return BatchIsAuthorizedWithTokenResponse
     */
    public function batchIsAuthorizedWithToken(BatchIsAuthorizedWithTokenRequest $args)
    {
        $result = parent::batchIsAuthorizedWithToken($args->toArray());
        return new BatchIsAuthorizedWithTokenResponse($result->toArray());
    }
}
