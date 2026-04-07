<?php

namespace Sunaoka\Aws\Structures\S3Files\PutSynchronizationConfiguration;

trait PutSynchronizationConfigurationTrait
{
    /**
     * @param PutSynchronizationConfigurationRequest $args
     * @return PutSynchronizationConfigurationResponse
     */
    public function putSynchronizationConfiguration(PutSynchronizationConfigurationRequest $args)
    {
        $result = parent::putSynchronizationConfiguration($args->toArray());
        return new PutSynchronizationConfigurationResponse($result->toArray());
    }
}
