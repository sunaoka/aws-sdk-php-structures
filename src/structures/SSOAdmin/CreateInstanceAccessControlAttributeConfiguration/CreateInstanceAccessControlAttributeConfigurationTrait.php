<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateInstanceAccessControlAttributeConfiguration;

trait CreateInstanceAccessControlAttributeConfigurationTrait
{
    /**
     * @param CreateInstanceAccessControlAttributeConfigurationRequest $args
     * @return CreateInstanceAccessControlAttributeConfigurationResponse
     */
    public function createInstanceAccessControlAttributeConfiguration(CreateInstanceAccessControlAttributeConfigurationRequest $args)
    {
        $result = parent::createInstanceAccessControlAttributeConfiguration($args->toArray());
        return new CreateInstanceAccessControlAttributeConfigurationResponse($result->toArray());
    }
}
