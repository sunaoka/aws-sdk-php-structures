<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutRuntimeLogConfiguration;

trait PutRuntimeLogConfigurationTrait
{
    /**
     * @param PutRuntimeLogConfigurationRequest $args
     * @return void
     */
    public function putRuntimeLogConfiguration(PutRuntimeLogConfigurationRequest $args)
    {
        parent::putRuntimeLogConfiguration($args->toArray());
    }
}
