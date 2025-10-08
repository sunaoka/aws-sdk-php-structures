<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations;

trait ListSecurityConfigurationsTrait
{
    /**
     * @param ListSecurityConfigurationsRequest $args
     * @return ListSecurityConfigurationsResponse
     */
    public function listSecurityConfigurations(ListSecurityConfigurationsRequest $args)
    {
        $result = parent::listSecurityConfigurations($args->toArray());
        return new ListSecurityConfigurationsResponse($result->toArray());
    }
}
