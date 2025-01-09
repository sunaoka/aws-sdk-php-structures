<?php

namespace Sunaoka\Aws\Structures\S3\ListParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PartNumber
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $ETag
 * @property int $Size
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 */
class Part extends Shape
{
    /**
     * @param array{
     *     PartNumber?: int,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     ETag?: string,
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
