<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketInventoryConfiguration;

trait PutBucketInventoryConfigurationTrait
{
    /**
     * @param PutBucketInventoryConfigurationRequest $args
     * @return void
     */
    public function putBucketInventoryConfiguration(PutBucketInventoryConfigurationRequest $args)
    {
        parent::putBucketInventoryConfiguration($args->toArray());
    }
}
