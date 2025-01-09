<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PartNumber
 * @property int $Size
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 */
class ObjectPart extends Shape
{
    /**
     * @param array{
     *     PartNumber?: int,
     *     Size?: int,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
