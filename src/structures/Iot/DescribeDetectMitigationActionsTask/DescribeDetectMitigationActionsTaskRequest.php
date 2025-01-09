<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDetectMitigationActionsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class DescribeDetectMitigationActionsTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
