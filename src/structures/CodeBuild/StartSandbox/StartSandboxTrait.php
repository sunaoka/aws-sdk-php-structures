<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandbox;

trait StartSandboxTrait
{
    /**
     * @param StartSandboxRequest $args
     * @return StartSandboxResponse
     */
    public function startSandbox(StartSandboxRequest $args)
    {
        $result = parent::startSandbox($args->toArray());
        return new StartSandboxResponse($result->toArray());
    }
}
