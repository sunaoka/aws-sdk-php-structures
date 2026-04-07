<?php

namespace Sunaoka\Aws\Structures\S3Files\GetSynchronizationConfiguration;

trait GetSynchronizationConfigurationTrait
{
    /**
     * @param GetSynchronizationConfigurationRequest $args
     * @return GetSynchronizationConfigurationResponse
     */
    public function getSynchronizationConfiguration(GetSynchronizationConfigurationRequest $args)
    {
        $result = parent::getSynchronizationConfiguration($args->toArray());
        return new GetSynchronizationConfigurationResponse($result->toArray());
    }
}
