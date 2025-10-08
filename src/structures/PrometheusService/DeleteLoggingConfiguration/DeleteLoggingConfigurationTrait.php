<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteLoggingConfiguration;

trait DeleteLoggingConfigurationTrait
{
    /**
     * @param DeleteLoggingConfigurationRequest $args
     * @return void
     */
    public function deleteLoggingConfiguration(DeleteLoggingConfigurationRequest $args)
    {
        parent::deleteLoggingConfiguration($args->toArray());
    }
}
