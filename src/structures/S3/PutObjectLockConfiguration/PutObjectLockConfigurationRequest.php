<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLockConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\ObjectLockConfiguration|null $ObjectLockConfiguration
 * @property 'requester'|null $RequestPayer
 * @property string|null $Token
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property string|null $ExpectedBucketOwner
 */
class PutObjectLockConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ObjectLockConfiguration?: Shapes\ObjectLockConfiguration|null,
     *     RequestPayer?: 'requester'|null,
     *     Token?: string|null,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
