<?php

namespace Sunaoka\Aws\Structures\Ecr\StopReplicationBackfill;

trait StopReplicationBackfillTrait
{
    /**
     * @param StopReplicationBackfillRequest $args
     * @return StopReplicationBackfillResponse
     */
    public function stopReplicationBackfill(StopReplicationBackfillRequest $args)
    {
        $result = parent::stopReplicationBackfill($args->toArray());
        return new StopReplicationBackfillResponse($result->toArray());
    }
}
