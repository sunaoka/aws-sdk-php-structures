<?php

namespace Sunaoka\Aws\Structures\S3Tables\DisassociateTableReplication;

trait DisassociateTableReplicationTrait
{
    /**
     * @param DisassociateTableReplicationRequest $args
     * @return DisassociateTableReplicationResponse
     */
    public function disassociateTableReplication(DisassociateTableReplicationRequest $args)
    {
        $result = parent::disassociateTableReplication($args->toArray());
        return new DisassociateTableReplicationResponse($result->toArray());
    }
}
