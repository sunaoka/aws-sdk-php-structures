<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataConfiguration;

trait CreateBucketMetadataConfigurationTrait
{
    /**
     * @param CreateBucketMetadataConfigurationRequest $args
     * @return void
     */
    public function createBucketMetadataConfiguration(CreateBucketMetadataConfigurationRequest $args)
    {
        parent::createBucketMetadataConfiguration($args->toArray());
    }
}
