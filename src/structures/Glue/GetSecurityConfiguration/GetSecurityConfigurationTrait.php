<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfiguration;

trait GetSecurityConfigurationTrait
{
    /**
     * @param GetSecurityConfigurationRequest $args
     * @return GetSecurityConfigurationResponse
     */
    public function getSecurityConfiguration(GetSecurityConfigurationRequest $args)
    {
        $result = parent::getSecurityConfiguration($args->toArray());
        return new GetSecurityConfigurationResponse($result->toArray());
    }
}
