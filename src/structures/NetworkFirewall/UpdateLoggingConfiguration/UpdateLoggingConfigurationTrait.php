<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateLoggingConfiguration;

trait UpdateLoggingConfigurationTrait
{
    /**
     * @param UpdateLoggingConfigurationRequest $args
     * @return UpdateLoggingConfigurationResponse
     */
    public function updateLoggingConfiguration(UpdateLoggingConfigurationRequest $args)
    {
        $result = parent::updateLoggingConfiguration($args->toArray());
        return new UpdateLoggingConfigurationResponse($result->toArray());
    }
}
