<?php

namespace Sunaoka\Aws\Structures\BackupStorage\GetChunk;

trait GetChunkTrait
{
    /**
     * @param GetChunkRequest $args
     * @return GetChunkResponse
     */
    public function getChunk(GetChunkRequest $args)
    {
        $result = parent::getChunk($args->toArray());
        return new GetChunkResponse($result->toArray());
    }
}
