<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedDeviceId
 * @property string $taskId
 */
class DescribeExecutionRequest extends Request
{
    /**
     * @param array{
     *     managedDeviceId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
