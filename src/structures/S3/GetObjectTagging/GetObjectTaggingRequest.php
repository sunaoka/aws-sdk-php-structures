<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $VersionId
 * @property string $ExpectedBucketOwner
 * @property 'requester' $RequestPayer
 */
class GetObjectTaggingRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     *     ExpectedBucketOwner?: string,
     *     RequestPayer?: 'requester'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
