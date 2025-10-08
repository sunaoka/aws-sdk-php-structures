<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutSipMediaApplicationLoggingConfiguration;

trait PutSipMediaApplicationLoggingConfigurationTrait
{
    /**
     * @param PutSipMediaApplicationLoggingConfigurationRequest $args
     * @return PutSipMediaApplicationLoggingConfigurationResponse
     */
    public function putSipMediaApplicationLoggingConfiguration(
        PutSipMediaApplicationLoggingConfigurationRequest $args,
    ) {
        $result = parent::putSipMediaApplicationLoggingConfiguration($args->toArray());
        return new PutSipMediaApplicationLoggingConfigurationResponse($result->toArray());
    }
}
