<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ETag
 * @property list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'> $ChecksumAlgorithm
 * @property int $Size
 * @property 'STANDARD' $StorageClass
 * @property string $Key
 * @property string $VersionId
 * @property bool $IsLatest
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property Owner $Owner
 * @property RestoreStatus $RestoreStatus
 */
class ObjectVersion extends Shape
{
    /**
     * @param array{
     *     ETag?: string,
     *     ChecksumAlgorithm?: list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'>,
     *     Size?: int,
     *     StorageClass?: 'STANDARD',
     *     Key?: string,
     *     VersionId?: string,
     *     IsLatest?: bool,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     Owner?: Owner,
     *     RestoreStatus?: RestoreStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
