<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CRC32'|'CRC32C'|'CRC64NVME'|'MD5'|'SHA1'|'SHA256'|null $ChecksumAlgorithm
 * @property 'FULL_OBJECT'|'COMPOSITE'|null $ChecksumType
 */
class S3ComputeObjectChecksumOperation extends Shape
{
    /**
     * @param array{
     *     ChecksumAlgorithm?: 'CRC32'|'CRC32C'|'CRC64NVME'|'MD5'|'SHA1'|'SHA256'|null,
     *     ChecksumType?: 'FULL_OBJECT'|'COMPOSITE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
