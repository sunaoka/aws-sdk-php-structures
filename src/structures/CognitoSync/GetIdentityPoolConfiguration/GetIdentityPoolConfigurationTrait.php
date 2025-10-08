<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetIdentityPoolConfiguration;

trait GetIdentityPoolConfigurationTrait
{
    /**
     * @param GetIdentityPoolConfigurationRequest $args
     * @return GetIdentityPoolConfigurationResponse
     */
    public function getIdentityPoolConfiguration(GetIdentityPoolConfigurationRequest $args)
    {
        $result = parent::getIdentityPoolConfiguration($args->toArray());
        return new GetIdentityPoolConfigurationResponse($result->toArray());
    }
}
