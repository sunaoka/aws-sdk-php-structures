<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolClientSessionConfiguration;

trait SetUserPoolClientSessionConfigurationTrait
{
    /**
     * @param SetUserPoolClientSessionConfigurationRequest $args
     * @return SetUserPoolClientSessionConfigurationResponse
     */
    public function setUserPoolClientSessionConfiguration(SetUserPoolClientSessionConfigurationRequest $args)
    {
        $result = parent::setUserPoolClientSessionConfiguration($args->toArray());
        return new SetUserPoolClientSessionConfigurationResponse($result->toArray());
    }
}
