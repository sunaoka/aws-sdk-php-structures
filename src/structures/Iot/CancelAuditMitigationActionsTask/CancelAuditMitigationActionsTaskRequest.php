<?php

namespace Sunaoka\Aws\Structures\Iot\CancelAuditMitigationActionsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class CancelAuditMitigationActionsTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
