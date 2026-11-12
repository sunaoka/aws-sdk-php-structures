<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolSessionConfiguration;

trait GetUserPoolSessionConfigurationTrait
{
    /**
     * @param GetUserPoolSessionConfigurationRequest $args
     * @return GetUserPoolSessionConfigurationResponse
     */
    public function getUserPoolSessionConfiguration(GetUserPoolSessionConfigurationRequest $args)
    {
        $result = parent::getUserPoolSessionConfiguration($args->toArray());
        return new GetUserPoolSessionConfigurationResponse($result->toArray());
    }
}
