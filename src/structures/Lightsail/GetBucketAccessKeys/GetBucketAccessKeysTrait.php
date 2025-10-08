<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketAccessKeys;

trait GetBucketAccessKeysTrait
{
    /**
     * @param GetBucketAccessKeysRequest $args
     * @return GetBucketAccessKeysResponse
     */
    public function getBucketAccessKeys(GetBucketAccessKeysRequest $args)
    {
        $result = parent::getBucketAccessKeys($args->toArray());
        return new GetBucketAccessKeysResponse($result->toArray());
    }
}
