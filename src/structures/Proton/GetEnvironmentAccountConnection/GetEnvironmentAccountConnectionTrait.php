<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentAccountConnection;

trait GetEnvironmentAccountConnectionTrait
{
    /**
     * @param GetEnvironmentAccountConnectionRequest $args
     * @return GetEnvironmentAccountConnectionResponse
     */
    public function getEnvironmentAccountConnection(GetEnvironmentAccountConnectionRequest $args)
    {
        $result = parent::getEnvironmentAccountConnection($args->toArray());
        return new GetEnvironmentAccountConnectionResponse($result->toArray());
    }
}
