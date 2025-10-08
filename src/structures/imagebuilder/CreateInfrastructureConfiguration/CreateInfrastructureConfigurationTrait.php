<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateInfrastructureConfiguration;

trait CreateInfrastructureConfigurationTrait
{
    /**
     * @param CreateInfrastructureConfigurationRequest $args
     * @return CreateInfrastructureConfigurationResponse
     */
    public function createInfrastructureConfiguration(CreateInfrastructureConfigurationRequest $args)
    {
        $result = parent::createInfrastructureConfiguration($args->toArray());
        return new CreateInfrastructureConfigurationResponse($result->toArray());
    }
}
