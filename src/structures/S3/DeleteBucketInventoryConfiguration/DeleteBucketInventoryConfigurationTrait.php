<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketInventoryConfiguration;

trait DeleteBucketInventoryConfigurationTrait
{
    /**
     * @param DeleteBucketInventoryConfigurationRequest $args
     * @return void
     */
    public function deleteBucketInventoryConfiguration(DeleteBucketInventoryConfigurationRequest $args)
    {
        parent::deleteBucketInventoryConfiguration($args->toArray());
    }
}
