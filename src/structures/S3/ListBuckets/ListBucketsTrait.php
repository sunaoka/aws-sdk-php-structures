<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets;

trait ListBucketsTrait
{
    /**
     * @param ListBucketsRequest $args
     * @return ListBucketsResponse
     */
    public function listBuckets(ListBucketsRequest $args)
    {
        $result = parent::listBuckets($args->toArray());
        return new ListBucketsResponse($result->toArray());
    }
}
