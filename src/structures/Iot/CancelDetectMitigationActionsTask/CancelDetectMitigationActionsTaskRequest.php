<?php

namespace Sunaoka\Aws\Structures\Iot\CancelDetectMitigationActionsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class CancelDetectMitigationActionsTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
