<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\CreateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\Command $command
 * @property string $description
 * @property array<string, string> $tags
 * @property list<string> $targets
 */
class CreateTaskRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     command: Shapes\Command,
     *     description?: string,
     *     tags?: array<string, string>,
     *     targets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
