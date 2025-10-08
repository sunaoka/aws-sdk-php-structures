<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketEncryption;

trait PutTableBucketEncryptionTrait
{
    /**
     * @param PutTableBucketEncryptionRequest $args
     * @return void
     */
    public function putTableBucketEncryption(PutTableBucketEncryptionRequest $args)
    {
        parent::putTableBucketEncryption($args->toArray());
    }
}
