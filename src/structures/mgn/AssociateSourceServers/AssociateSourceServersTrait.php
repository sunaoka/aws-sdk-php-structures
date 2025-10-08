<?php

namespace Sunaoka\Aws\Structures\mgn\AssociateSourceServers;

trait AssociateSourceServersTrait
{
    /**
     * @param AssociateSourceServersRequest $args
     * @return AssociateSourceServersResponse
     */
    public function associateSourceServers(AssociateSourceServersRequest $args)
    {
        $result = parent::associateSourceServers($args->toArray());
        return new AssociateSourceServersResponse($result->toArray());
    }
}
