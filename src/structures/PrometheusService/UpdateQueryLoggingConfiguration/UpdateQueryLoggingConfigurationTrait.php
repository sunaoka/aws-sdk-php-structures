<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateQueryLoggingConfiguration;

trait UpdateQueryLoggingConfigurationTrait
{
    /**
     * @param UpdateQueryLoggingConfigurationRequest $args
     * @return UpdateQueryLoggingConfigurationResponse
     */
    public function updateQueryLoggingConfiguration(UpdateQueryLoggingConfigurationRequest $args)
    {
        $result = parent::updateQueryLoggingConfiguration($args->toArray());
        return new UpdateQueryLoggingConfigurationResponse($result->toArray());
    }
}
