<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property Shapes\CompletedMultipartUpload $MultipartUpload
 * @property string $UploadId
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 * @property string $IfMatch
 * @property string $IfNoneMatch
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 */
class CompleteMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     MultipartUpload?: Shapes\CompletedMultipartUpload,
     *     UploadId: string,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string,
     *     IfMatch?: string,
     *     IfNoneMatch?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
