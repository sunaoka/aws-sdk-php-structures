<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateLoggingConfiguration;

trait CreateLoggingConfigurationTrait
{
    /**
     * @param CreateLoggingConfigurationRequest $args
     * @return CreateLoggingConfigurationResponse
     */
    public function createLoggingConfiguration(CreateLoggingConfigurationRequest $args)
    {
        $result = parent::createLoggingConfiguration($args->toArray());
        return new CreateLoggingConfigurationResponse($result->toArray());
    }
}
