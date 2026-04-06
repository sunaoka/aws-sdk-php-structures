<?php

namespace Sunaoka\Aws\Structures\Chime\PutSipMediaApplicationLoggingConfiguration;

trait PutSipMediaApplicationLoggingConfigurationTrait
{
    /**
     * @param PutSipMediaApplicationLoggingConfigurationRequest $args
     * @return PutSipMediaApplicationLoggingConfigurationResponse
     */
    public function putSipMediaApplicationLoggingConfiguration(PutSipMediaApplicationLoggingConfigurationRequest $args)
    {
        $result = parent::putSipMediaApplicationLoggingConfiguration($args->toArray());
        return new PutSipMediaApplicationLoggingConfigurationResponse($result->toArray());
    }
}
