<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteInfrastructureConfiguration;

trait DeleteInfrastructureConfigurationTrait
{
    /**
     * @param DeleteInfrastructureConfigurationRequest $args
     * @return DeleteInfrastructureConfigurationResponse
     */
    public function deleteInfrastructureConfiguration(DeleteInfrastructureConfigurationRequest $args)
    {
        $result = parent::deleteInfrastructureConfiguration($args->toArray());
        return new DeleteInfrastructureConfigurationResponse($result->toArray());
    }
}
