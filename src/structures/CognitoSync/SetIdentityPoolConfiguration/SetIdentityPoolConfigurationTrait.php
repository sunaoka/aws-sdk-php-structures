<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SetIdentityPoolConfiguration;

trait SetIdentityPoolConfigurationTrait
{
    /**
     * @param SetIdentityPoolConfigurationRequest $args
     * @return SetIdentityPoolConfigurationResponse
     */
    public function setIdentityPoolConfiguration(SetIdentityPoolConfigurationRequest $args)
    {
        $result = parent::setIdentityPoolConfiguration($args->toArray());
        return new SetIdentityPoolConfigurationResponse($result->toArray());
    }
}
