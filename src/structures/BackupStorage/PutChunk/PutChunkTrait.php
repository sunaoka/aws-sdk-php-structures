<?php

namespace Sunaoka\Aws\Structures\BackupStorage\PutChunk;

trait PutChunkTrait
{
    /**
     * @param PutChunkRequest $args
     * @return PutChunkResponse
     */
    public function putChunk(PutChunkRequest $args)
    {
        $result = parent::putChunk($args->toArray());
        return new PutChunkResponse($result->toArray());
    }
}
