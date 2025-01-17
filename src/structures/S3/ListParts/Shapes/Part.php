<?php

namespace Sunaoka\Aws\Structures\S3\ListParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PartNumber
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $ETag
 * @property int|null $Size
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 */
class Part extends Shape
{
    /**
     * @param array{
     *     PartNumber?: int|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     ETag?: string|null,
     *     Size?: int|null,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumCRC64NVME?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
