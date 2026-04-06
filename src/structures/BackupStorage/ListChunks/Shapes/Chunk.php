<?php

namespace Sunaoka\Aws\Structures\BackupStorage\ListChunks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property int $Length
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 * @property string $ChunkToken
 */
class Chunk extends Shape
{
    /**
     * @param array{
     *     Index: int,
     *     Length: int,
     *     Checksum: string,
     *     ChecksumAlgorithm: 'SHA256',
     *     ChunkToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
