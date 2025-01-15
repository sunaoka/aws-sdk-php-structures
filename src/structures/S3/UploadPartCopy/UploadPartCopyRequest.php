<?php

namespace Sunaoka\Aws\Structures\S3\UploadPartCopy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $CopySource
 * @property string|null $CopySourceIfMatch
 * @property \Aws\Api\DateTimeResult|null $CopySourceIfModifiedSince
 * @property string|null $CopySourceIfNoneMatch
 * @property \Aws\Api\DateTimeResult|null $CopySourceIfUnmodifiedSince
 * @property string|null $CopySourceRange
 * @property string $Key
 * @property int $PartNumber
 * @property string $UploadId
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $CopySourceSSECustomerAlgorithm
 * @property string|null $CopySourceSSECustomerKey
 * @property string|null $CopySourceSSECustomerKeyMD5
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property string|null $ExpectedSourceBucketOwner
 */
class UploadPartCopyRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     CopySource: string,
     *     CopySourceIfMatch?: string|null,
     *     CopySourceIfModifiedSince?: \Aws\Api\DateTimeResult|null,
     *     CopySourceIfNoneMatch?: string|null,
     *     CopySourceIfUnmodifiedSince?: \Aws\Api\DateTimeResult|null,
     *     CopySourceRange?: string|null,
     *     Key: string,
     *     PartNumber: int,
     *     UploadId: string,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     CopySourceSSECustomerAlgorithm?: string|null,
     *     CopySourceSSECustomerKey?: string|null,
     *     CopySourceSSECustomerKeyMD5?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null,
     *     ExpectedSourceBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
