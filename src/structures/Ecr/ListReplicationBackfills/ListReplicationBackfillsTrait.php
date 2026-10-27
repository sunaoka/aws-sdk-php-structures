<?php

namespace Sunaoka\Aws\Structures\Ecr\ListReplicationBackfills;

trait ListReplicationBackfillsTrait
{
    /**
     * @param ListReplicationBackfillsRequest $args
     * @return ListReplicationBackfillsResponse
     */
    public function listReplicationBackfills(ListReplicationBackfillsRequest $args)
    {
        $result = parent::listReplicationBackfills($args->toArray());
        return new ListReplicationBackfillsResponse($result->toArray());
    }
}
