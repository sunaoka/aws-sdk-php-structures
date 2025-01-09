<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 * @property Shapes\BucketLifecycleConfiguration $LifecycleConfiguration
 * @property string $ExpectedBucketOwner
 * @property 'varies_by_storage_class'|'all_storage_classes_128K' $TransitionDefaultMinimumObjectSize
 */
class PutBucketLifecycleConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256',
     *     LifecycleConfiguration?: Shapes\BucketLifecycleConfiguration,
     *     ExpectedBucketOwner?: string,
     *     TransitionDefaultMinimumObjectSize?: 'varies_by_storage_class'|'all_storage_classes_128K'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
