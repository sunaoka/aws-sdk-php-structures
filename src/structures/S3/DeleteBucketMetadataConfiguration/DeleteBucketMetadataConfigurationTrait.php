<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketMetadataConfiguration;

trait DeleteBucketMetadataConfigurationTrait
{
    /**
     * @param DeleteBucketMetadataConfigurationRequest $args
     * @return void
     */
    public function deleteBucketMetadataConfiguration(DeleteBucketMetadataConfigurationRequest $args)
    {
        parent::deleteBucketMetadataConfiguration($args->toArray());
    }
}
