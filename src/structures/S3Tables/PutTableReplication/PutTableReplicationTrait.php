<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableReplication;

trait PutTableReplicationTrait
{
    /**
     * @param PutTableReplicationRequest $args
     * @return PutTableReplicationResponse
     */
    public function putTableReplication(PutTableReplicationRequest $args)
    {
        $result = parent::putTableReplication($args->toArray());
        return new PutTableReplicationResponse($result->toArray());
    }
}
