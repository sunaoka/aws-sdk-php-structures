<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketVersioning;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property string|null $MFA
 * @property Shapes\VersioningConfiguration $VersioningConfiguration
 * @property string|null $ExpectedBucketOwner
 */
class PutBucketVersioningRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null,
     *     MFA?: string|null,
     *     VersioningConfiguration: Shapes\VersioningConfiguration,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
