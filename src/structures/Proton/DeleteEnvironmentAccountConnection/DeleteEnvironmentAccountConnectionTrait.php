<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteEnvironmentAccountConnection;

trait DeleteEnvironmentAccountConnectionTrait
{
    /**
     * @param DeleteEnvironmentAccountConnectionRequest $args
     * @return DeleteEnvironmentAccountConnectionResponse
     */
    public function deleteEnvironmentAccountConnection(DeleteEnvironmentAccountConnectionRequest $args)
    {
        $result = parent::deleteEnvironmentAccountConnection($args->toArray());
        return new DeleteEnvironmentAccountConnectionResponse($result->toArray());
    }
}
