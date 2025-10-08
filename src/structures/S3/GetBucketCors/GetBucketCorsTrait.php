<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketCors;

trait GetBucketCorsTrait
{
    /**
     * @param GetBucketCorsRequest $args
     * @return GetBucketCorsResponse
     */
    public function getBucketCors(GetBucketCorsRequest $args)
    {
        $result = parent::getBucketCors($args->toArray());
        return new GetBucketCorsResponse($result->toArray());
    }
}
