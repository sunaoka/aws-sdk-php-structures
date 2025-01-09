<?php

namespace Sunaoka\Aws\Structures\Iot\CancelAuditTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class CancelAuditTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
