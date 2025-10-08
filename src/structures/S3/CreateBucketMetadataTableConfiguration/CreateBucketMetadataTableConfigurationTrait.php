<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataTableConfiguration;

trait CreateBucketMetadataTableConfigurationTrait
{
    /**
     * @param CreateBucketMetadataTableConfigurationRequest $args
     * @return void
     */
    public function createBucketMetadataTableConfiguration(CreateBucketMetadataTableConfigurationRequest $args)
    {
        parent::createBucketMetadataTableConfiguration($args->toArray());
    }
}
