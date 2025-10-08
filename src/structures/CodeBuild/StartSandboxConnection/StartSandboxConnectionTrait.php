<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandboxConnection;

trait StartSandboxConnectionTrait
{
    /**
     * @param StartSandboxConnectionRequest $args
     * @return StartSandboxConnectionResponse
     */
    public function startSandboxConnection(StartSandboxConnectionRequest $args)
    {
        $result = parent::startSandboxConnection($args->toArray());
        return new StartSandboxConnectionResponse($result->toArray());
    }
}
