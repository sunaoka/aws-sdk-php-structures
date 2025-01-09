<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Bucket
 * @property Shapes\ReplicationConfiguration $ReplicationConfiguration
 */
class PutBucketReplicationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket: string,
     *     ReplicationConfiguration: Shapes\ReplicationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
