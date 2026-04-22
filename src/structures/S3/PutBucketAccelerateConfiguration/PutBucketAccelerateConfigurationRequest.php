<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAccelerateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\AccelerateConfiguration $AccelerateConfiguration
 * @property string|null $ExpectedBucketOwner
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null $ChecksumAlgorithm
 */
class PutBucketAccelerateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     AccelerateConfiguration: Shapes\AccelerateConfiguration,
     *     ExpectedBucketOwner?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
