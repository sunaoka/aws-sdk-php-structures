<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketReplication;

trait GetBucketReplicationTrait
{
    /**
     * @param GetBucketReplicationRequest $args
     * @return GetBucketReplicationResponse
     */
    public function getBucketReplication(GetBucketReplicationRequest $args)
    {
        $result = parent::getBucketReplication($args->toArray());
        return new GetBucketReplicationResponse($result->toArray());
    }
}
