<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolMfaConfig;

trait GetUserPoolMfaConfigTrait
{
    /**
     * @param GetUserPoolMfaConfigRequest $args
     * @return GetUserPoolMfaConfigResponse
     */
    public function getUserPoolMfaConfig(GetUserPoolMfaConfigRequest $args)
    {
        $result = parent::getUserPoolMfaConfig($args->toArray());
        return new GetUserPoolMfaConfigResponse($result->toArray());
    }
}
