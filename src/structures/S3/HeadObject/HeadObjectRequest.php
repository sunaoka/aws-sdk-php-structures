<?php

namespace Sunaoka\Aws\Structures\S3\HeadObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $IfMatch
 * @property \Aws\Api\DateTimeResult $IfModifiedSince
 * @property string $IfNoneMatch
 * @property \Aws\Api\DateTimeResult $IfUnmodifiedSince
 * @property string $Key
 * @property string $Range
 * @property string $ResponseCacheControl
 * @property string $ResponseContentDisposition
 * @property string $ResponseContentEncoding
 * @property string $ResponseContentLanguage
 * @property string $ResponseContentType
 * @property \Aws\Api\DateTimeResult $ResponseExpires
 * @property string $VersionId
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 * @property 'requester' $RequestPayer
 * @property int $PartNumber
 * @property string $ExpectedBucketOwner
 * @property 'ENABLED' $ChecksumMode
 */
class HeadObjectRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     IfMatch?: string,
     *     IfModifiedSince?: \Aws\Api\DateTimeResult,
     *     IfNoneMatch?: string,
     *     IfUnmodifiedSince?: \Aws\Api\DateTimeResult,
     *     Key: string,
     *     Range?: string,
     *     ResponseCacheControl?: string,
     *     ResponseContentDisposition?: string,
     *     ResponseContentEncoding?: string,
     *     ResponseContentLanguage?: string,
     *     ResponseContentType?: string,
     *     ResponseExpires?: \Aws\Api\DateTimeResult,
     *     VersionId?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     RequestPayer?: 'requester',
     *     PartNumber?: int,
     *     ExpectedBucketOwner?: string,
     *     ChecksumMode?: 'ENABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
