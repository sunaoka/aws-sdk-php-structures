<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateHostedConnection;

trait AllocateHostedConnectionTrait
{
    /**
     * @param AllocateHostedConnectionRequest $args
     * @return AllocateHostedConnectionResponse
     */
    public function allocateHostedConnection(AllocateHostedConnectionRequest $args)
    {
        $result = parent::allocateHostedConnection($args->toArray());
        return new AllocateHostedConnectionResponse($result->toArray());
    }
}
