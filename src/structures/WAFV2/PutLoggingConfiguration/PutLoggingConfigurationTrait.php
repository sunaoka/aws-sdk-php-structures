<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutLoggingConfiguration;

trait PutLoggingConfigurationTrait
{
    /**
     * @param PutLoggingConfigurationRequest $args
     * @return PutLoggingConfigurationResponse
     */
    public function putLoggingConfiguration(PutLoggingConfigurationRequest $args)
    {
        $result = parent::putLoggingConfiguration($args->toArray());
        return new PutLoggingConfigurationResponse($result->toArray());
    }
}
