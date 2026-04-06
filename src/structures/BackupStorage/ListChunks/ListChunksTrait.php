<?php

namespace Sunaoka\Aws\Structures\BackupStorage\ListChunks;

trait ListChunksTrait
{
    /**
     * @param ListChunksRequest $args
     * @return ListChunksResponse
     */
    public function listChunks(ListChunksRequest $args)
    {
        $result = parent::listChunks($args->toArray());
        return new ListChunksResponse($result->toArray());
    }
}
