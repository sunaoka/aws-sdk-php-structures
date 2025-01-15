<?php

namespace Sunaoka\Aws\Structures\S3\GetObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $IfMatch
 * @property \Aws\Api\DateTimeResult|null $IfModifiedSince
 * @property string|null $IfNoneMatch
 * @property \Aws\Api\DateTimeResult|null $IfUnmodifiedSince
 * @property string $Key
 * @property string|null $Range
 * @property string|null $ResponseCacheControl
 * @property string|null $ResponseContentDisposition
 * @property string|null $ResponseContentEncoding
 * @property string|null $ResponseContentLanguage
 * @property string|null $ResponseContentType
 * @property \Aws\Api\DateTimeResult|null $ResponseExpires
 * @property string|null $VersionId
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 * @property 'requester'|null $RequestPayer
 * @property int|null $PartNumber
 * @property string|null $ExpectedBucketOwner
 * @property 'ENABLED'|null $ChecksumMode
 */
class GetObjectRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     IfMatch?: string|null,
     *     IfModifiedSince?: \Aws\Api\DateTimeResult|null,
     *     IfNoneMatch?: string|null,
     *     IfUnmodifiedSince?: \Aws\Api\DateTimeResult|null,
     *     Key: string,
     *     Range?: string|null,
     *     ResponseCacheControl?: string|null,
     *     ResponseContentDisposition?: string|null,
     *     ResponseContentEncoding?: string|null,
     *     ResponseContentLanguage?: string|null,
     *     ResponseContentType?: string|null,
     *     ResponseExpires?: \Aws\Api\DateTimeResult|null,
     *     VersionId?: string|null,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     PartNumber?: int|null,
     *     ExpectedBucketOwner?: string|null,
     *     ChecksumMode?: 'ENABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
