<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketVersioning;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $MFA
 * @property Shapes\VersioningConfiguration $VersioningConfiguration
 * @property string $ExpectedBucketOwner
 */
class PutBucketVersioningRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     MFA?: string,
     *     VersioningConfiguration: Shapes\VersioningConfiguration,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
