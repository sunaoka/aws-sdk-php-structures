<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $WindowTaskId
 */
class GetMaintenanceWindowTaskRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     WindowTaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
