<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetIdentityCenterAuthToken;

trait GetIdentityCenterAuthTokenTrait
{
    /**
     * @param GetIdentityCenterAuthTokenRequest $args
     * @return GetIdentityCenterAuthTokenResponse
     */
    public function getIdentityCenterAuthToken(GetIdentityCenterAuthTokenRequest $args)
    {
        $result = parent::getIdentityCenterAuthToken($args->toArray());
        return new GetIdentityCenterAuthTokenResponse($result->toArray());
    }
}
