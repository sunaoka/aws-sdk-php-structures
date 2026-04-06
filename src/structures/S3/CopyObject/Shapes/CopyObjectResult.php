<?php

namespace Sunaoka\Aws\Structures\S3\CopyObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ETag
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 */
class CopyObjectResult extends Shape
{
    /**
     * @param array{
     *     ETag?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
