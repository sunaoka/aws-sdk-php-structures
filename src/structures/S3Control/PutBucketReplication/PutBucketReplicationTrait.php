<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication;

trait PutBucketReplicationTrait
{
    /**
     * @param PutBucketReplicationRequest $args
     * @return void
     */
    public function putBucketReplication(PutBucketReplicationRequest $args)
    {
        parent::putBucketReplication($args->toArray());
    }
}
