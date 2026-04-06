<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableReplicationStatus;

trait GetTableReplicationStatusTrait
{
    /**
     * @param GetTableReplicationStatusRequest $args
     * @return GetTableReplicationStatusResponse
     */
    public function getTableReplicationStatus(GetTableReplicationStatusRequest $args)
    {
        $result = parent::getTableReplicationStatus($args->toArray());
        return new GetTableReplicationStatusResponse($result->toArray());
    }
}
