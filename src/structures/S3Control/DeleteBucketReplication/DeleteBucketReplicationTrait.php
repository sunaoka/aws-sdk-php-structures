<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteBucketReplication;

trait DeleteBucketReplicationTrait
{
    /**
     * @param DeleteBucketReplicationRequest $args
     * @return void
     */
    public function deleteBucketReplication(DeleteBucketReplicationRequest $args)
    {
        parent::deleteBucketReplication($args->toArray());
    }
}
