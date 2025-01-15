<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property string|null $ExpectedBucketOwner
 * @property 'requester'|null $RequestPayer
 */
class GetObjectTaggingRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     ExpectedBucketOwner?: string|null,
     *     RequestPayer?: 'requester'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
