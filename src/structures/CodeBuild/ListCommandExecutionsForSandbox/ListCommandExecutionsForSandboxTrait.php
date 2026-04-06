<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCommandExecutionsForSandbox;

trait ListCommandExecutionsForSandboxTrait
{
    /**
     * @param ListCommandExecutionsForSandboxRequest $args
     * @return ListCommandExecutionsForSandboxResponse
     */
    public function listCommandExecutionsForSandbox(ListCommandExecutionsForSandboxRequest $args)
    {
        $result = parent::listCommandExecutionsForSandbox($args->toArray());
        return new ListCommandExecutionsForSandboxResponse($result->toArray());
    }
}
