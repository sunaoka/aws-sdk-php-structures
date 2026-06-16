<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectAnnotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property string $AnnotationName
 * @property string|resource|\Psr\Http\Message\StreamInterface $AnnotationPayload
 * @property string|null $ObjectIfMatch
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null $ChecksumAlgorithm
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property string|null $ChecksumSHA512
 * @property string|null $ChecksumMD5
 * @property string|null $ChecksumXXHASH64
 * @property string|null $ChecksumXXHASH3
 * @property string|null $ChecksumXXHASH128
 * @property string|null $ContentMD5
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 */
class PutObjectAnnotationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     AnnotationName: string,
     *     AnnotationPayload: string|resource|\Psr\Http\Message\StreamInterface,
     *     ObjectIfMatch?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumCRC64NVME?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null,
     *     ChecksumSHA512?: string|null,
     *     ChecksumMD5?: string|null,
     *     ChecksumXXHASH64?: string|null,
     *     ChecksumXXHASH3?: string|null,
     *     ChecksumXXHASH128?: string|null,
     *     ContentMD5?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
