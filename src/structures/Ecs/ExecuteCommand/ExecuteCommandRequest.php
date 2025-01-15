<?php

namespace Sunaoka\Aws\Structures\Ecs\ExecuteCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string|null $container
 * @property string $command
 * @property bool $interactive
 * @property string $task
 */
class ExecuteCommandRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     container?: string|null,
     *     command: string,
     *     interactive: bool,
     *     task: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
