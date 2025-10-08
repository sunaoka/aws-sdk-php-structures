<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListInfrastructureConfigurations;

trait ListInfrastructureConfigurationsTrait
{
    /**
     * @param ListInfrastructureConfigurationsRequest $args
     * @return ListInfrastructureConfigurationsResponse
     */
    public function listInfrastructureConfigurations(ListInfrastructureConfigurationsRequest $args)
    {
        $result = parent::listInfrastructureConfigurations($args->toArray());
        return new ListInfrastructureConfigurationsResponse($result->toArray());
    }
}
