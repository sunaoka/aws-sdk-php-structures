<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Bucket
 */
class GetBucketReplicationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
