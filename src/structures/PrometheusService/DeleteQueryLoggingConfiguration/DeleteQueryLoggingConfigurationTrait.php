<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteQueryLoggingConfiguration;

trait DeleteQueryLoggingConfigurationTrait
{
    /**
     * @param DeleteQueryLoggingConfigurationRequest $args
     * @return void
     */
    public function deleteQueryLoggingConfiguration(DeleteQueryLoggingConfigurationRequest $args)
    {
        parent::deleteQueryLoggingConfiguration($args->toArray());
    }
}
