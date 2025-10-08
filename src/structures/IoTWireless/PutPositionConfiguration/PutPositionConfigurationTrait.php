<?php

namespace Sunaoka\Aws\Structures\IoTWireless\PutPositionConfiguration;

trait PutPositionConfigurationTrait
{
    /**
     * @param PutPositionConfigurationRequest $args
     * @return PutPositionConfigurationResponse
     */
    public function putPositionConfiguration(PutPositionConfigurationRequest $args)
    {
        $result = parent::putPositionConfiguration($args->toArray());
        return new PutPositionConfigurationResponse($result->toArray());
    }
}
