<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 */
class GetMaintenanceWindowExecutionRequest extends Request
{
    /**
     * @param array{WindowExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
