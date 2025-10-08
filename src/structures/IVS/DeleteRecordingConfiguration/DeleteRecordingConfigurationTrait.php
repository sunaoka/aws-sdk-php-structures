<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteRecordingConfiguration;

trait DeleteRecordingConfigurationTrait
{
    /**
     * @param DeleteRecordingConfigurationRequest $args
     * @return void
     */
    public function deleteRecordingConfiguration(DeleteRecordingConfigurationRequest $args)
    {
        parent::deleteRecordingConfiguration($args->toArray());
    }
}
