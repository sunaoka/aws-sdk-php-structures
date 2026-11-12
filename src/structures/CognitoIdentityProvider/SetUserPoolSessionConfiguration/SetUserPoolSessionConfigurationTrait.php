<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolSessionConfiguration;

trait SetUserPoolSessionConfigurationTrait
{
    /**
     * @param SetUserPoolSessionConfigurationRequest $args
     * @return SetUserPoolSessionConfigurationResponse
     */
    public function setUserPoolSessionConfiguration(SetUserPoolSessionConfigurationRequest $args)
    {
        $result = parent::setUserPoolSessionConfiguration($args->toArray());
        return new SetUserPoolSessionConfigurationResponse($result->toArray());
    }
}
