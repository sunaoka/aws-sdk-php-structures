<?php

namespace Sunaoka\Aws\Structures\S3\ListObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $ETag
 * @property list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'> $ChecksumAlgorithm
 * @property int $Size
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property Owner $Owner
 * @property RestoreStatus $RestoreStatus
 */
class ObjectShape extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     ETag?: string,
     *     ChecksumAlgorithm?: list<'CRC32'|'CRC32C'|'SHA1'|'SHA256'>,
     *     Size?: int,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE',
     *     Owner?: Owner,
     *     RestoreStatus?: RestoreStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
