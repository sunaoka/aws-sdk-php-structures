<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteScraperLoggingConfiguration;

trait DeleteScraperLoggingConfigurationTrait
{
    /**
     * @param DeleteScraperLoggingConfigurationRequest $args
     * @return void
     */
    public function deleteScraperLoggingConfiguration(DeleteScraperLoggingConfigurationRequest $args)
    {
        parent::deleteScraperLoggingConfiguration($args->toArray());
    }
}
