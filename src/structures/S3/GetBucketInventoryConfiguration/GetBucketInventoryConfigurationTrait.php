<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketInventoryConfiguration;

trait GetBucketInventoryConfigurationTrait
{
    /**
     * @param GetBucketInventoryConfigurationRequest $args
     * @return GetBucketInventoryConfigurationResponse
     */
    public function getBucketInventoryConfiguration(GetBucketInventoryConfigurationRequest $args)
    {
        $result = parent::getBucketInventoryConfiguration($args->toArray());
        return new GetBucketInventoryConfigurationResponse($result->toArray());
    }
}
