<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig;

trait SetUserPoolMfaConfigTrait
{
    /**
     * @param SetUserPoolMfaConfigRequest $args
     * @return SetUserPoolMfaConfigResponse
     */
    public function setUserPoolMfaConfig(SetUserPoolMfaConfigRequest $args)
    {
        $result = parent::setUserPoolMfaConfig($args->toArray());
        return new SetUserPoolMfaConfigResponse($result->toArray());
    }
}
