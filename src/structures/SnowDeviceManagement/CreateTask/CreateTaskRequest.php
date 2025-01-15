<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\CreateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\Command $command
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property list<string> $targets
 */
class CreateTaskRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     command: Shapes\Command,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     targets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
