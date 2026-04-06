<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property Shapes\LifecycleConfiguration|null $LifecycleConfiguration
 * @property string|null $ExpectedBucketOwner
 */
class PutBucketLifecycleRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null,
     *     LifecycleConfiguration?: Shapes\LifecycleConfiguration|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
