<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLockConfiguration;

trait PutObjectLockConfigurationTrait
{
    /**
     * @param PutObjectLockConfigurationRequest $args
     * @return PutObjectLockConfigurationResponse
     */
    public function putObjectLockConfiguration(PutObjectLockConfigurationRequest $args)
    {
        $result = parent::putObjectLockConfiguration($args->toArray());
        return new PutObjectLockConfigurationResponse($result->toArray());
    }
}
