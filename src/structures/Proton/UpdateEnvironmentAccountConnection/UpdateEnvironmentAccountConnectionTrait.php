<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironmentAccountConnection;

trait UpdateEnvironmentAccountConnectionTrait
{
    /**
     * @param UpdateEnvironmentAccountConnectionRequest $args
     * @return UpdateEnvironmentAccountConnectionResponse
     */
    public function updateEnvironmentAccountConnection(UpdateEnvironmentAccountConnectionRequest $args)
    {
        $result = parent::updateEnvironmentAccountConnection($args->toArray());
        return new UpdateEnvironmentAccountConnectionResponse($result->toArray());
    }
}
