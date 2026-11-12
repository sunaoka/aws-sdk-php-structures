<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolClientSessionConfiguration;

trait GetUserPoolClientSessionConfigurationTrait
{
    /**
     * @param GetUserPoolClientSessionConfigurationRequest $args
     * @return GetUserPoolClientSessionConfigurationResponse
     */
    public function getUserPoolClientSessionConfiguration(GetUserPoolClientSessionConfigurationRequest $args)
    {
        $result = parent::getUserPoolClientSessionConfiguration($args->toArray());
        return new GetUserPoolClientSessionConfigurationResponse($result->toArray());
    }
}
