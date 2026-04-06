<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAbac;

trait GetBucketAbacTrait
{
    /**
     * @param GetBucketAbacRequest $args
     * @return GetBucketAbacResponse
     */
    public function getBucketAbac(GetBucketAbacRequest $args)
    {
        $result = parent::getBucketAbac($args->toArray());
        return new GetBucketAbacResponse($result->toArray());
    }
}
