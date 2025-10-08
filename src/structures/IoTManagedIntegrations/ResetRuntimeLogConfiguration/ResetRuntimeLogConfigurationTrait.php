<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ResetRuntimeLogConfiguration;

trait ResetRuntimeLogConfigurationTrait
{
    /**
     * @param ResetRuntimeLogConfigurationRequest $args
     * @return void
     */
    public function resetRuntimeLogConfiguration(ResetRuntimeLogConfigurationRequest $args)
    {
        parent::resetRuntimeLogConfiguration($args->toArray());
    }
}
