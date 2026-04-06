<?php

namespace Sunaoka\Aws\Structures\BackupStorage\GetChunk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageJobId
 * @property string $ChunkToken
 */
class GetChunkRequest extends Request
{
    /**
     * @param array{
     *     StorageJobId: string,
     *     ChunkToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
