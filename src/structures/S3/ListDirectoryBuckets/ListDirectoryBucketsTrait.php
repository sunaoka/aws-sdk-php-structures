<?php

namespace Sunaoka\Aws\Structures\S3\ListDirectoryBuckets;

trait ListDirectoryBucketsTrait
{
    /**
     * @param ListDirectoryBucketsRequest $args
     * @return ListDirectoryBucketsResponse
     */
    public function listDirectoryBuckets(ListDirectoryBucketsRequest $args)
    {
        $result = parent::listDirectoryBuckets($args->toArray());
        return new ListDirectoryBucketsResponse($result->toArray());
    }
}
