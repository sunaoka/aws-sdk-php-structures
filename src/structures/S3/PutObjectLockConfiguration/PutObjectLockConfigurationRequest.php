<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLockConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\ObjectLockConfiguration $ObjectLockConfiguration
 * @property 'requester' $RequestPayer
 * @property string $Token
 * @property string $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property string $ExpectedBucketOwner
 */
class PutObjectLockConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ObjectLockConfiguration?: Shapes\ObjectLockConfiguration,
     *     RequestPayer?: 'requester',
     *     Token?: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
