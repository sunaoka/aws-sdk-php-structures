<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication;

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
