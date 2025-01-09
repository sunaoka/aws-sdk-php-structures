<?php

namespace Sunaoka\Aws\Structures\S3\UploadPartCopy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $CopySource
 * @property string $CopySourceIfMatch
 * @property \Aws\Api\DateTimeResult $CopySourceIfModifiedSince
 * @property string $CopySourceIfNoneMatch
 * @property \Aws\Api\DateTimeResult $CopySourceIfUnmodifiedSince
 * @property string $CopySourceRange
 * @property string $Key
 * @property int $PartNumber
 * @property string $UploadId
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 * @property string $CopySourceSSECustomerAlgorithm
 * @property string $CopySourceSSECustomerKey
 * @property string $CopySourceSSECustomerKeyMD5
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 * @property string $ExpectedSourceBucketOwner
 */
class UploadPartCopyRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     CopySource: string,
     *     CopySourceIfMatch?: string,
     *     CopySourceIfModifiedSince?: \Aws\Api\DateTimeResult,
     *     CopySourceIfNoneMatch?: string,
     *     CopySourceIfUnmodifiedSince?: \Aws\Api\DateTimeResult,
     *     CopySourceRange?: string,
     *     Key: string,
     *     PartNumber: int,
     *     UploadId: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     CopySourceSSECustomerAlgorithm?: string,
     *     CopySourceSSECustomerKey?: string,
     *     CopySourceSSECustomerKeyMD5?: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string,
     *     ExpectedSourceBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
