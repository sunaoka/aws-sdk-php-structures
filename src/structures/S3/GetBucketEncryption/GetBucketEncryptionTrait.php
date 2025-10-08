<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketEncryption;

trait GetBucketEncryptionTrait
{
    /**
     * @param GetBucketEncryptionRequest $args
     * @return GetBucketEncryptionResponse
     */
    public function getBucketEncryption(GetBucketEncryptionRequest $args)
    {
        $result = parent::getBucketEncryption($args->toArray());
        return new GetBucketEncryptionResponse($result->toArray());
    }
}
