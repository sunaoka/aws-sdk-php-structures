<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartCommandExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sandboxId
 * @property string $command
 * @property 'SHELL'|null $type
 */
class StartCommandExecutionRequest extends Request
{
    /**
     * @param array{
     *     sandboxId: string,
     *     command: string,
     *     type?: 'SHELL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
