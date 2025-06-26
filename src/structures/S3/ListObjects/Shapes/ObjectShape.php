<?php

namespace Sunaoka\Aws\Structures\S3\ListObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $ETag
 * @property list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'>|null $ChecksumAlgorithm
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 * @property int|null $Size
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null $StorageClass
 * @property Owner|null $Owner
 * @property RestoreStatus|null $RestoreStatus
 */
class ObjectShape extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     ETag?: string|null,
     *     ChecksumAlgorithm?: list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'>|null,
     *     ChecksumType?: 'COMPOSITE'|'FULL_OBJECT'|null,
     *     Size?: int|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null,
     *     Owner?: Owner|null,
     *     RestoreStatus?: RestoreStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
