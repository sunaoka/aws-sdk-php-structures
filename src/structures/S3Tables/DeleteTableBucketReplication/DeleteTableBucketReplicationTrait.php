<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucketReplication;

trait DeleteTableBucketReplicationTrait
{
    /**
     * @param DeleteTableBucketReplicationRequest $args
     * @return void
     */
    public function deleteTableBucketReplication(DeleteTableBucketReplicationRequest $args)
    {
        parent::deleteTableBucketReplication($args->toArray());
    }
}
