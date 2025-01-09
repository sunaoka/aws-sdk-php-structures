<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 * @property string $TaskId
 */
class GetMaintenanceWindowExecutionTaskRequest extends Request
{
    /**
     * @param array{
     *     WindowExecutionId: string,
     *     TaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
