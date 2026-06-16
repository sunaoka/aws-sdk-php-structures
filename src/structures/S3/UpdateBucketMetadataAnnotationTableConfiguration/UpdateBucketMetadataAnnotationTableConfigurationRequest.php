<?php

namespace Sunaoka\Aws\Structures\S3\UpdateBucketMetadataAnnotationTableConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ContentMD5
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null $ChecksumAlgorithm
 * @property Shapes\AnnotationTableConfigurationUpdates $AnnotationTableConfiguration
 * @property string|null $ExpectedBucketOwner
 */
class UpdateBucketMetadataAnnotationTableConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContentMD5?: string|null,
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'|null,
     *     AnnotationTableConfiguration: Shapes\AnnotationTableConfigurationUpdates,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
