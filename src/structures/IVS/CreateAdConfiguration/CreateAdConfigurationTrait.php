<?php

namespace Sunaoka\Aws\Structures\IVS\CreateAdConfiguration;

trait CreateAdConfigurationTrait
{
    /**
     * @param CreateAdConfigurationRequest $args
     * @return CreateAdConfigurationResponse
     */
    public function createAdConfiguration(CreateAdConfigurationRequest $args)
    {
        $result = parent::createAdConfiguration($args->toArray());
        return new CreateAdConfigurationResponse($result->toArray());
    }
}
