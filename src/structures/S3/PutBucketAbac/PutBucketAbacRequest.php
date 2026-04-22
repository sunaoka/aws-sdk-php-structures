<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAbac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null $ChecksumAlgorithm
 * @property string|null $ExpectedBucketOwner
 * @property Shapes\AbacStatus $AbacStatus
 */
class PutBucketAbacRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null,
     *     ExpectedBucketOwner?: string|null,
     *     AbacStatus: Shapes\AbacStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
