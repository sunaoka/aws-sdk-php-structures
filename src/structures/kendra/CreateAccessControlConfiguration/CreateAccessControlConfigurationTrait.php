<?php

namespace Sunaoka\Aws\Structures\kendra\CreateAccessControlConfiguration;

trait CreateAccessControlConfigurationTrait
{
    /**
     * @param CreateAccessControlConfigurationRequest $args
     * @return CreateAccessControlConfigurationResponse
     */
    public function createAccessControlConfiguration(CreateAccessControlConfigurationRequest $args)
    {
        $result = parent::createAccessControlConfiguration($args->toArray());
        return new CreateAccessControlConfigurationResponse($result->toArray());
    }
}
