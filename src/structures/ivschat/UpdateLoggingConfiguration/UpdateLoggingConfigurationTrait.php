<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration;

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
