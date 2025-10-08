<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteBucketAccessKey;

trait DeleteBucketAccessKeyTrait
{
    /**
     * @param DeleteBucketAccessKeyRequest $args
     * @return DeleteBucketAccessKeyResponse
     */
    public function deleteBucketAccessKey(DeleteBucketAccessKeyRequest $args)
    {
        $result = parent::deleteBucketAccessKey($args->toArray());
        return new DeleteBucketAccessKeyResponse($result->toArray());
    }
}
