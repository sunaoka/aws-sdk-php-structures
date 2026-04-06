<?php

namespace Sunaoka\Aws\Structures\BackupStorage\PutChunk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupJobId
 * @property string $UploadId
 * @property int $ChunkIndex
 * @property string|resource|\Psr\Http\Message\StreamInterface $Data
 * @property int $Length
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 */
class PutChunkRequest extends Request
{
    /**
     * @param array{
     *     BackupJobId: string,
     *     UploadId: string,
     *     ChunkIndex: int,
     *     Data: string|resource|\Psr\Http\Message\StreamInterface,
     *     Length: int,
     *     Checksum: string,
     *     ChecksumAlgorithm: 'SHA256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
