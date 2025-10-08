<?php

namespace Sunaoka\Aws\Structures\IVS\CreateRecordingConfiguration;

trait CreateRecordingConfigurationTrait
{
    /**
     * @param CreateRecordingConfigurationRequest $args
     * @return CreateRecordingConfigurationResponse
     */
    public function createRecordingConfiguration(CreateRecordingConfigurationRequest $args)
    {
        $result = parent::createRecordingConfiguration($args->toArray());
        return new CreateRecordingConfigurationResponse($result->toArray());
    }
}
