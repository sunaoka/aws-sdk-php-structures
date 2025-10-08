<?php

namespace Sunaoka\Aws\Structures\S3Vectors\ListVectorBuckets;

trait ListVectorBucketsTrait
{
    /**
     * @param ListVectorBucketsRequest $args
     * @return ListVectorBucketsResponse
     */
    public function listVectorBuckets(ListVectorBucketsRequest $args)
    {
        $result = parent::listVectorBuckets($args->toArray());
        return new ListVectorBucketsResponse($result->toArray());
    }
}
