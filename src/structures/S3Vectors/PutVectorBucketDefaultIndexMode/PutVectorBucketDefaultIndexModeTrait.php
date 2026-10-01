<?php

namespace Sunaoka\Aws\Structures\S3Vectors\PutVectorBucketDefaultIndexMode;

trait PutVectorBucketDefaultIndexModeTrait
{
    /**
     * @param PutVectorBucketDefaultIndexModeRequest $args
     * @return PutVectorBucketDefaultIndexModeResponse
     */
    public function putVectorBucketDefaultIndexMode(PutVectorBucketDefaultIndexModeRequest $args)
    {
        $result = parent::putVectorBucketDefaultIndexMode($args->toArray());
        return new PutVectorBucketDefaultIndexModeResponse($result->toArray());
    }
}
