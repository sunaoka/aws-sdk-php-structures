<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectRetention;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $VersionId
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 */
class GetObjectRetentionRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
