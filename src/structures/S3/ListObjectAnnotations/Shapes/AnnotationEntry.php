<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnnotationName
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string|null $ETag
 * @property list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'>|null $ChecksumAlgorithm
 * @property int $Size
 * @property 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED'|null $ReplicationStatus
 */
class AnnotationEntry extends Shape
{
    /**
     * @param array{
     *     AnnotationName: string,
     *     LastModified: \Aws\Api\DateTimeResult,
     *     ETag?: string|null,
     *     ChecksumAlgorithm?: list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|'SHA512'|'MD5'|'XXHASH64'|'XXHASH3'|'XXHASH128'>|null,
     *     Size: int,
     *     ReplicationStatus?: 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
