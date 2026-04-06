<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ETag
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property int|null $PartNumber
 */
class CompletedPart extends Shape
{
    /**
     * @param array{
     *     ETag?: string|null,
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null,
     *     PartNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
