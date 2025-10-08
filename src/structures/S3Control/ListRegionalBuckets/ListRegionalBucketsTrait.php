<?php

namespace Sunaoka\Aws\Structures\S3Control\ListRegionalBuckets;

trait ListRegionalBucketsTrait
{
    /**
     * @param ListRegionalBucketsRequest $args
     * @return ListRegionalBucketsResponse
     */
    public function listRegionalBuckets(ListRegionalBucketsRequest $args)
    {
        $result = parent::listRegionalBuckets($args->toArray());
        return new ListRegionalBucketsResponse($result->toArray());
    }
}
