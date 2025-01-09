<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class DescribeTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
