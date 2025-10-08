<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSipMediaApplicationLoggingConfiguration;

trait GetSipMediaApplicationLoggingConfigurationTrait
{
    /**
     * @param GetSipMediaApplicationLoggingConfigurationRequest $args
     * @return GetSipMediaApplicationLoggingConfigurationResponse
     */
    public function getSipMediaApplicationLoggingConfiguration(GetSipMediaApplicationLoggingConfigurationRequest $args)
    {
        $result = parent::getSipMediaApplicationLoggingConfiguration($args->toArray());
        return new GetSipMediaApplicationLoggingConfigurationResponse($result->toArray());
    }
}
