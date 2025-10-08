<?php

namespace Sunaoka\Aws\Structures\Proton\RejectEnvironmentAccountConnection;

trait RejectEnvironmentAccountConnectionTrait
{
    /**
     * @param RejectEnvironmentAccountConnectionRequest $args
     * @return RejectEnvironmentAccountConnectionResponse
     */
    public function rejectEnvironmentAccountConnection(RejectEnvironmentAccountConnectionRequest $args)
    {
        $result = parent::rejectEnvironmentAccountConnection($args->toArray());
        return new RejectEnvironmentAccountConnectionResponse($result->toArray());
    }
}
