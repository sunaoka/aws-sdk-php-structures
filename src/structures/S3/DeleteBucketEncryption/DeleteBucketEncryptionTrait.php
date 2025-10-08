<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketEncryption;

trait DeleteBucketEncryptionTrait
{
    /**
     * @param DeleteBucketEncryptionRequest $args
     * @return void
     */
    public function deleteBucketEncryption(DeleteBucketEncryptionRequest $args)
    {
        parent::deleteBucketEncryption($args->toArray());
    }
}
