<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDomainConfiguration;

trait CreateDomainConfigurationTrait
{
    /**
     * @param CreateDomainConfigurationRequest $args
     * @return CreateDomainConfigurationResponse
     */
    public function createDomainConfiguration(CreateDomainConfigurationRequest $args)
    {
        $result = parent::createDomainConfiguration($args->toArray());
        return new CreateDomainConfigurationResponse($result->toArray());
    }
}
