<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ETag
 * @property string $ChecksumCRC32
 * @property string $ChecksumCRC32C
 * @property string $ChecksumSHA1
 * @property string $ChecksumSHA256
 * @property int $PartNumber
 */
class CompletedPart extends Shape
{
    /**
     * @param array{
     *     ETag?: string,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     PartNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
