<?php

namespace Sunaoka\Aws\Structures\S3\UploadPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Body
 * @property string $Bucket
 * @property int $ContentLength
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property string $Key
 * @property int $PartNumber
 * @property string $UploadId
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 * @property 'requester' $RequestPayer
 * @property string $ExpectedBucketOwner
 */
class UploadPartRequest extends Request
{
    /**
     * @param array{
     *     Body?: string,
     *     Bucket: string,
     *     ContentLength?: int,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     Key: string,
     *     PartNumber: int,
     *     UploadId: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     RequestPayer?: 'requester',
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
