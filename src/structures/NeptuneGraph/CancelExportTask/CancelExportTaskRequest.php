<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CancelExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskIdentifier
 */
class CancelExportTaskRequest extends Request
{
    /**
     * @param array{taskIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
