<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property Shapes\CompletedMultipartUpload|null $MultipartUpload
 * @property string $UploadId
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property string|null $IfMatch
 * @property string|null $IfNoneMatch
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 */
class CompleteMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     MultipartUpload?: Shapes\CompletedMultipartUpload|null,
     *     UploadId: string,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null,
     *     IfMatch?: string|null,
     *     IfNoneMatch?: string|null,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
