<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateHostedConnection;

trait AssociateHostedConnectionTrait
{
    /**
     * @param AssociateHostedConnectionRequest $args
     * @return AssociateHostedConnectionResponse
     */
    public function associateHostedConnection(AssociateHostedConnectionRequest $args)
    {
        $result = parent::associateHostedConnection($args->toArray());
        return new AssociateHostedConnectionResponse($result->toArray());
    }
}
