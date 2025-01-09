<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditMitigationActionsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class DescribeAuditMitigationActionsTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
