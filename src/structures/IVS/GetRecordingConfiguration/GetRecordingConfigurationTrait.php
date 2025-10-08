<?php

namespace Sunaoka\Aws\Structures\IVS\GetRecordingConfiguration;

trait GetRecordingConfigurationTrait
{
    /**
     * @param GetRecordingConfigurationRequest $args
     * @return GetRecordingConfigurationResponse
     */
    public function getRecordingConfiguration(GetRecordingConfigurationRequest $args)
    {
        $result = parent::getRecordingConfiguration($args->toArray());
        return new GetRecordingConfigurationResponse($result->toArray());
    }
}
