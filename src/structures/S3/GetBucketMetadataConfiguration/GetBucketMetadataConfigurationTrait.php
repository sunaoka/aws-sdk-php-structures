<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataConfiguration;

trait GetBucketMetadataConfigurationTrait
{
    /**
     * @param GetBucketMetadataConfigurationRequest $args
     * @return GetBucketMetadataConfigurationResponse
     */
    public function getBucketMetadataConfiguration(GetBucketMetadataConfigurationRequest $args)
    {
        $result = parent::getBucketMetadataConfiguration($args->toArray());
        return new GetBucketMetadataConfigurationResponse($result->toArray());
    }
}
