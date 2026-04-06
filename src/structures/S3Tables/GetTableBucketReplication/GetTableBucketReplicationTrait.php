<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketReplication;

trait GetTableBucketReplicationTrait
{
    /**
     * @param GetTableBucketReplicationRequest $args
     * @return GetTableBucketReplicationResponse
     */
    public function getTableBucketReplication(GetTableBucketReplicationRequest $args)
    {
        $result = parent::getTableBucketReplication($args->toArray());
        return new GetTableBucketReplicationResponse($result->toArray());
    }
}
