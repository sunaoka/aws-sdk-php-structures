<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfigurations;

trait GetSecurityConfigurationsTrait
{
    /**
     * @param GetSecurityConfigurationsRequest $args
     * @return GetSecurityConfigurationsResponse
     */
    public function getSecurityConfigurations(GetSecurityConfigurationsRequest $args)
    {
        $result = parent::getSecurityConfigurations($args->toArray());
        return new GetSecurityConfigurationsResponse($result->toArray());
    }
}
