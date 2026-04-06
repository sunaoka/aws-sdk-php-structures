<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableReplication;

trait DeleteTableReplicationTrait
{
    /**
     * @param DeleteTableReplicationRequest $args
     * @return void
     */
    public function deleteTableReplication(DeleteTableReplicationRequest $args)
    {
        parent::deleteTableReplication($args->toArray());
    }
}
