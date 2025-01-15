<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 */
class GetObjectLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
