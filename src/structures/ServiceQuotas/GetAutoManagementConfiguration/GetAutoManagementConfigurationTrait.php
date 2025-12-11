<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAutoManagementConfiguration;

trait GetAutoManagementConfigurationTrait
{
    /**
     * @param GetAutoManagementConfigurationRequest $args
     * @return GetAutoManagementConfigurationResponse
     */
    public function getAutoManagementConfiguration(GetAutoManagementConfigurationRequest $args)
    {
        $result = parent::getAutoManagementConfiguration($args->toArray());
        return new GetAutoManagementConfigurationResponse($result->toArray());
    }
}
