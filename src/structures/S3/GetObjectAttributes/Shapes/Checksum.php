<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property string|null $ChecksumSHA512
 * @property string|null $ChecksumMD5
 * @property string|null $ChecksumXXHASH64
 * @property string|null $ChecksumXXHASH3
 * @property string|null $ChecksumXXHASH128
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 */
class Checksum extends Shape
{
    /**
     * @param array{
     *     ChecksumCRC32?: string|null,
     *     ChecksumCRC32C?: string|null,
     *     ChecksumCRC64NVME?: string|null,
     *     ChecksumSHA1?: string|null,
     *     ChecksumSHA256?: string|null,
     *     ChecksumSHA512?: string|null,
     *     ChecksumMD5?: string|null,
     *     ChecksumXXHASH64?: string|null,
     *     ChecksumXXHASH3?: string|null,
     *     ChecksumXXHASH128?: string|null,
     *     ChecksumType?: 'COMPOSITE'|'FULL_OBJECT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
