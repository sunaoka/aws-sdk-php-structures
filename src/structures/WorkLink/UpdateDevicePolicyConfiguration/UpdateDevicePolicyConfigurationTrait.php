<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateDevicePolicyConfiguration;

trait UpdateDevicePolicyConfigurationTrait
{
    /**
     * @param UpdateDevicePolicyConfigurationRequest $args
     * @return UpdateDevicePolicyConfigurationResponse
     */
    public function updateDevicePolicyConfiguration(UpdateDevicePolicyConfigurationRequest $args)
    {
        $result = parent::updateDevicePolicyConfiguration($args->toArray());
        return new UpdateDevicePolicyConfigurationResponse($result->toArray());
    }
}
