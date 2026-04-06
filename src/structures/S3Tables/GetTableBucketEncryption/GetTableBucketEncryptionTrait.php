<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketEncryption;

trait GetTableBucketEncryptionTrait
{
    /**
     * @param GetTableBucketEncryptionRequest $args
     * @return GetTableBucketEncryptionResponse
     */
    public function getTableBucketEncryption(GetTableBucketEncryptionRequest $args)
    {
        $result = parent::getTableBucketEncryption($args->toArray());
        return new GetTableBucketEncryptionResponse($result->toArray());
    }
}
