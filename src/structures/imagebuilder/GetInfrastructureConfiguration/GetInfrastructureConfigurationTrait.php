<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetInfrastructureConfiguration;

trait GetInfrastructureConfigurationTrait
{
    /**
     * @param GetInfrastructureConfigurationRequest $args
     * @return GetInfrastructureConfigurationResponse
     */
    public function getInfrastructureConfiguration(GetInfrastructureConfigurationRequest $args)
    {
        $result = parent::getInfrastructureConfiguration($args->toArray());
        return new GetInfrastructureConfigurationResponse($result->toArray());
    }
}
