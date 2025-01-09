<?php

namespace Sunaoka\Aws\Structures\Ecs\ExecuteCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $container
 * @property string $command
 * @property bool $interactive
 * @property string $task
 */
class ExecuteCommandRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     container?: string,
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
