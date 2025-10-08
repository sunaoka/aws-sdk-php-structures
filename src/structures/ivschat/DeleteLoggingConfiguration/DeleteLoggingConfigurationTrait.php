<?php

namespace Sunaoka\Aws\Structures\ivschat\DeleteLoggingConfiguration;

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
