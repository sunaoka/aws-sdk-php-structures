<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property Shapes\BucketLifecycleConfiguration|null $LifecycleConfiguration
 * @property string|null $ExpectedBucketOwner
 * @property 'varies_by_storage_class'|'all_storage_classes_128K'|null $TransitionDefaultMinimumObjectSize
 */
class PutBucketLifecycleConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|null,
     *     LifecycleConfiguration?: Shapes\BucketLifecycleConfiguration|null,
     *     ExpectedBucketOwner?: string|null,
     *     TransitionDefaultMinimumObjectSize?: 'varies_by_storage_class'|'all_storage_classes_128K'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
