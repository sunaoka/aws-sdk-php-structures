<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamSessionAdminShell;

trait CreateStreamSessionAdminShellTrait
{
    /**
     * @param CreateStreamSessionAdminShellRequest $args
     * @return CreateStreamSessionAdminShellResponse
     */
    public function createStreamSessionAdminShell(CreateStreamSessionAdminShellRequest $args)
    {
        $result = parent::createStreamSessionAdminShell($args->toArray());
        return new CreateStreamSessionAdminShellResponse($result->toArray());
    }
}
