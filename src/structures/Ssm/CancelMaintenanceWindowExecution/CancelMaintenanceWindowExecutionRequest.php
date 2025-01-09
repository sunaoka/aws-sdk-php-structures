<?php

namespace Sunaoka\Aws\Structures\Ssm\CancelMaintenanceWindowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 */
class CancelMaintenanceWindowExecutionRequest extends Request
{
    /**
     * @param array{WindowExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
