<?php

namespace Sunaoka\Aws\Structures\S3\UpdateBucketMetadataInventoryTableConfiguration;

trait UpdateBucketMetadataInventoryTableConfigurationTrait
{
    /**
     * @param UpdateBucketMetadataInventoryTableConfigurationRequest $args
     * @return void
     */
    public function updateBucketMetadataInventoryTableConfiguration(UpdateBucketMetadataInventoryTableConfigurationRequest $args)
    {
        parent::updateBucketMetadataInventoryTableConfiguration($args->toArray());
    }
}
