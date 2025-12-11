<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketReplication;

trait PutTableBucketReplicationTrait
{
    /**
     * @param PutTableBucketReplicationRequest $args
     * @return PutTableBucketReplicationResponse
     */
    public function putTableBucketReplication(PutTableBucketReplicationRequest $args)
    {
        $result = parent::putTableBucketReplication($args->toArray());
        return new PutTableBucketReplicationResponse($result->toArray());
    }
}
