<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucketEncryption;

trait DeleteTableBucketEncryptionTrait
{
    /**
     * @param DeleteTableBucketEncryptionRequest $args
     * @return void
     */
    public function deleteTableBucketEncryption(DeleteTableBucketEncryptionRequest $args)
    {
        parent::deleteTableBucketEncryption($args->toArray());
    }
}
