<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataTableConfiguration;

trait GetBucketMetadataTableConfigurationTrait
{
    /**
     * @param GetBucketMetadataTableConfigurationRequest $args
     * @return GetBucketMetadataTableConfigurationResponse
     */
    public function getBucketMetadataTableConfiguration(GetBucketMetadataTableConfigurationRequest $args)
    {
        $result = parent::getBucketMetadataTableConfiguration($args->toArray());
        return new GetBucketMetadataTableConfigurationResponse($result->toArray());
    }
}
