<?php

namespace Sunaoka\Aws\Structures\mgn\DisassociateSourceServers;

trait DisassociateSourceServersTrait
{
    /**
     * @param DisassociateSourceServersRequest $args
     * @return DisassociateSourceServersResponse
     */
    public function disassociateSourceServers(DisassociateSourceServersRequest $args)
    {
        $result = parent::disassociateSourceServers($args->toArray());
        return new DisassociateSourceServersResponse($result->toArray());
    }
}
