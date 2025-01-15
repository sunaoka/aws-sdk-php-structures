<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ETag
 * @property list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'>|null $ChecksumAlgorithm
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 * @property int|null $Size
 * @property 'STANDARD'|null $StorageClass
 * @property string|null $Key
 * @property string|null $VersionId
 * @property bool|null $IsLatest
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property Owner|null $Owner
 * @property RestoreStatus|null $RestoreStatus
 */
class ObjectVersion extends Shape
{
    /**
     * @param array{
     *     ETag?: string|null,
     *     ChecksumAlgorithm?: list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'>|null,
     *     ChecksumType?: 'COMPOSITE'|'FULL_OBJECT'|null,
     *     Size?: int|null,
     *     StorageClass?: 'STANDARD'|null,
     *     Key?: string|null,
     *     VersionId?: string|null,
     *     IsLatest?: bool|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     Owner?: Owner|null,
     *     RestoreStatus?: RestoreStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
