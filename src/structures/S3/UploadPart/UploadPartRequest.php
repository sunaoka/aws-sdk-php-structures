<?php

namespace Sunaoka\Aws\Structures\S3\UploadPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Body
 * @property string $Bucket
 * @property int|null $ContentLength
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property string $Key
 * @property int $PartNumber
 * @property string $UploadId
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 */
class UploadPartRequest extends Request
{
    /**
     * @param array{
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Bucket: string,
     *     ContentLength?: int|null,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null,
     *     Key: string,
     *     PartNumber: int,
     *     UploadId: string,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
