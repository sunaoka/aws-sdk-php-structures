<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterDefaultHostManagementConfiguration;

trait RegisterDefaultHostManagementConfigurationTrait
{
    /**
     * @param RegisterDefaultHostManagementConfigurationRequest $args
     * @return RegisterDefaultHostManagementConfigurationResponse
     */
    public function registerDefaultHostManagementConfiguration(RegisterDefaultHostManagementConfigurationRequest $args)
    {
        $result = parent::registerDefaultHostManagementConfiguration($args->toArray());
        return new RegisterDefaultHostManagementConfigurationResponse($result->toArray());
    }
}
