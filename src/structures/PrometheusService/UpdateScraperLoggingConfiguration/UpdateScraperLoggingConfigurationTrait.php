<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraperLoggingConfiguration;

trait UpdateScraperLoggingConfigurationTrait
{
    /**
     * @param UpdateScraperLoggingConfigurationRequest $args
     * @return UpdateScraperLoggingConfigurationResponse
     */
    public function updateScraperLoggingConfiguration(UpdateScraperLoggingConfigurationRequest $args)
    {
        $result = parent::updateScraperLoggingConfiguration($args->toArray());
        return new UpdateScraperLoggingConfigurationResponse($result->toArray());
    }
}
