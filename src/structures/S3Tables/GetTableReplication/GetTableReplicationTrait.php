<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableReplication;

trait GetTableReplicationTrait
{
    /**
     * @param GetTableReplicationRequest $args
     * @return GetTableReplicationResponse
     */
    public function getTableReplication(GetTableReplicationRequest $args)
    {
        $result = parent::getTableReplication($args->toArray());
        return new GetTableReplicationResponse($result->toArray());
    }
}
