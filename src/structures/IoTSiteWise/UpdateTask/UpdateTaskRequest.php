<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $taskName
 * @property string|null $description
 * @property Shapes\TaskConfiguration|null $taskConfiguration
 */
class UpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     taskName: string,
     *     description?: string|null,
     *     taskConfiguration?: Shapes\TaskConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
