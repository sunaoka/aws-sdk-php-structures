<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class DescribeAuditTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
