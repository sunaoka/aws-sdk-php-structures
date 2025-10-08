<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopSandbox;

trait StopSandboxTrait
{
    /**
     * @param StopSandboxRequest $args
     * @return StopSandboxResponse
     */
    public function stopSandbox(StopSandboxRequest $args)
    {
        $result = parent::stopSandbox($args->toArray());
        return new StopSandboxResponse($result->toArray());
    }
}
