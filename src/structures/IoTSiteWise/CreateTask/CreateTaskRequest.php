<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $taskName
 * @property string|null $description
 * @property Shapes\TaskConfiguration $taskConfiguration
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateTaskRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     taskName: string,
     *     description?: string|null,
     *     taskConfiguration: Shapes\TaskConfiguration,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
