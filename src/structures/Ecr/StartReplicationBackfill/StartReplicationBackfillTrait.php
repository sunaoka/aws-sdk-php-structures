<?php

namespace Sunaoka\Aws\Structures\Ecr\StartReplicationBackfill;

trait StartReplicationBackfillTrait
{
    /**
     * @param StartReplicationBackfillRequest $args
     * @return StartReplicationBackfillResponse
     */
    public function startReplicationBackfill(StartReplicationBackfillRequest $args)
    {
        $result = parent::startReplicationBackfill($args->toArray());
        return new StartReplicationBackfillResponse($result->toArray());
    }
}
