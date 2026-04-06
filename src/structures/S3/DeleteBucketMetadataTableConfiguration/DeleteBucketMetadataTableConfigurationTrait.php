<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketMetadataTableConfiguration;

trait DeleteBucketMetadataTableConfigurationTrait
{
    /**
     * @param DeleteBucketMetadataTableConfigurationRequest $args
     * @return void
     */
    public function deleteBucketMetadataTableConfiguration(DeleteBucketMetadataTableConfigurationRequest $args)
    {
        parent::deleteBucketMetadataTableConfiguration($args->toArray());
    }
}
