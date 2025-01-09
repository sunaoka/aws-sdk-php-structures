<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\CancelTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class CancelTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
