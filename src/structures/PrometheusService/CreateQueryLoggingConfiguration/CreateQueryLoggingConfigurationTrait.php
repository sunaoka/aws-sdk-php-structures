<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateQueryLoggingConfiguration;

trait CreateQueryLoggingConfigurationTrait
{
    /**
     * @param CreateQueryLoggingConfigurationRequest $args
     * @return CreateQueryLoggingConfigurationResponse
     */
    public function createQueryLoggingConfiguration(CreateQueryLoggingConfigurationRequest $args)
    {
        $result = parent::createQueryLoggingConfiguration($args->toArray());
        return new CreateQueryLoggingConfigurationResponse($result->toArray());
    }
}
