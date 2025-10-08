<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutEmailMonitoringConfiguration;

trait PutEmailMonitoringConfigurationTrait
{
    /**
     * @param PutEmailMonitoringConfigurationRequest $args
     * @return PutEmailMonitoringConfigurationResponse
     */
    public function putEmailMonitoringConfiguration(PutEmailMonitoringConfigurationRequest $args)
    {
        $result = parent::putEmailMonitoringConfiguration($args->toArray());
        return new PutEmailMonitoringConfigurationResponse($result->toArray());
    }
}
