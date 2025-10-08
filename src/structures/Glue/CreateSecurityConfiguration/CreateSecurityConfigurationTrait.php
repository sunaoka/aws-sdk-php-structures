<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration;

trait CreateSecurityConfigurationTrait
{
    /**
     * @param CreateSecurityConfigurationRequest $args
     * @return CreateSecurityConfigurationResponse
     */
    public function createSecurityConfiguration(CreateSecurityConfigurationRequest $args)
    {
        $result = parent::createSecurityConfiguration($args->toArray());
        return new CreateSecurityConfigurationResponse($result->toArray());
    }
}
