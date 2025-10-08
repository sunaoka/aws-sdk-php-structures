<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketEncryption;

trait PutBucketEncryptionTrait
{
    /**
     * @param PutBucketEncryptionRequest $args
     * @return void
     */
    public function putBucketEncryption(PutBucketEncryptionRequest $args)
    {
        parent::putBucketEncryption($args->toArray());
    }
}
