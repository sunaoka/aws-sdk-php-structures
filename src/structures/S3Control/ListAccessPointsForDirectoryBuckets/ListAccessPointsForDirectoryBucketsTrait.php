<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPointsForDirectoryBuckets;

trait ListAccessPointsForDirectoryBucketsTrait
{
    /**
     * @param ListAccessPointsForDirectoryBucketsRequest $args
     * @return ListAccessPointsForDirectoryBucketsResponse
     */
    public function listAccessPointsForDirectoryBuckets(ListAccessPointsForDirectoryBucketsRequest $args)
    {
        $result = parent::listAccessPointsForDirectoryBuckets($args->toArray());
        return new ListAccessPointsForDirectoryBucketsResponse($result->toArray());
    }
}
