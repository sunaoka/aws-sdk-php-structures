<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucketAccessKey;

trait CreateBucketAccessKeyTrait
{
    /**
     * @param CreateBucketAccessKeyRequest $args
     * @return CreateBucketAccessKeyResponse
     */
    public function createBucketAccessKey(CreateBucketAccessKeyRequest $args)
    {
        $result = parent::createBucketAccessKey($args->toArray());
        return new CreateBucketAccessKeyResponse($result->toArray());
    }
}
