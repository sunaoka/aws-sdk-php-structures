<?php

namespace Sunaoka\Aws\Structures\S3\CopyObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ETag
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 */
class CopyObjectResult extends Shape
{
    /**
     * @param array{
     *     ETag?: string,
     *     LastModified?: \Aws\Api\DateTimeResult,
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
