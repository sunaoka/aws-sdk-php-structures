<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $taskName
 */
class DeleteTaskRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     taskName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
