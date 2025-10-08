<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLockConfiguration;

trait GetObjectLockConfigurationTrait
{
    /**
     * @param GetObjectLockConfigurationRequest $args
     * @return GetObjectLockConfigurationResponse
     */
    public function getObjectLockConfiguration(GetObjectLockConfigurationRequest $args)
    {
        $result = parent::getObjectLockConfiguration($args->toArray());
        return new GetObjectLockConfigurationResponse($result->toArray());
    }
}
