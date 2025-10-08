<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateInfrastructureConfiguration;

trait UpdateInfrastructureConfigurationTrait
{
    /**
     * @param UpdateInfrastructureConfigurationRequest $args
     * @return UpdateInfrastructureConfigurationResponse
     */
    public function updateInfrastructureConfiguration(UpdateInfrastructureConfigurationRequest $args)
    {
        $result = parent::updateInfrastructureConfiguration($args->toArray());
        return new UpdateInfrastructureConfigurationResponse($result->toArray());
    }
}
