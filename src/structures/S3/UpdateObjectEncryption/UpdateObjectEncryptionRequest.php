<?php

namespace Sunaoka\Aws\Structures\S3\UpdateObjectEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property Shapes\ObjectEncryption $ObjectEncryption
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 */
class UpdateObjectEncryptionRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     ObjectEncryption: Shapes\ObjectEncryption,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
