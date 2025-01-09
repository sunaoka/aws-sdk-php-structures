<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CancelExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class CancelExportTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
