<?php

namespace Sunaoka\Aws\Structures\Proton\AcceptEnvironmentAccountConnection;

trait AcceptEnvironmentAccountConnectionTrait
{
    /**
     * @param AcceptEnvironmentAccountConnectionRequest $args
     * @return AcceptEnvironmentAccountConnectionResponse
     */
    public function acceptEnvironmentAccountConnection(AcceptEnvironmentAccountConnectionRequest $args)
    {
        $result = parent::acceptEnvironmentAccountConnection($args->toArray());
        return new AcceptEnvironmentAccountConnectionResponse($result->toArray());
    }
}
