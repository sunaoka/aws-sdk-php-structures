<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterTaskFromMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $WindowTaskId
 */
class DeregisterTaskFromMaintenanceWindowRequest extends Request
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
