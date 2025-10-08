<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentAccountConnection;

trait CreateEnvironmentAccountConnectionTrait
{
    /**
     * @param CreateEnvironmentAccountConnectionRequest $args
     * @return CreateEnvironmentAccountConnectionResponse
     */
    public function createEnvironmentAccountConnection(CreateEnvironmentAccountConnectionRequest $args)
    {
        $result = parent::createEnvironmentAccountConnection($args->toArray());
        return new CreateEnvironmentAccountConnectionResponse($result->toArray());
    }
}
