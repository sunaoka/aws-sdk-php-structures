<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTaskInvocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 * @property string $TaskId
 * @property string $InvocationId
 */
class GetMaintenanceWindowExecutionTaskInvocationRequest extends Request
{
    /**
     * @param array{
     *     WindowExecutionId: string,
     *     TaskId: string,
     *     InvocationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
