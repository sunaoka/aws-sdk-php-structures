<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterDefaultHostManagementConfiguration;

trait DeregisterDefaultHostManagementConfigurationTrait
{
    /**
     * @param DeregisterDefaultHostManagementConfigurationRequest $args
     * @return DeregisterDefaultHostManagementConfigurationResponse
     */
    public function deregisterDefaultHostManagementConfiguration(DeregisterDefaultHostManagementConfigurationRequest $args)
    {
        $result = parent::deregisterDefaultHostManagementConfiguration($args->toArray());
        return new DeregisterDefaultHostManagementConfigurationResponse($result->toArray());
    }
}
