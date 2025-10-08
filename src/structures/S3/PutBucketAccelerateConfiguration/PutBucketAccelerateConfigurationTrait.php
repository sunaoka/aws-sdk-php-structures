<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAccelerateConfiguration;

trait PutBucketAccelerateConfigurationTrait
{
    /**
     * @param PutBucketAccelerateConfigurationRequest $args
     * @return void
     */
    public function putBucketAccelerateConfiguration(PutBucketAccelerateConfigurationRequest $args)
    {
        parent::putBucketAccelerateConfiguration($args->toArray());
    }
}
