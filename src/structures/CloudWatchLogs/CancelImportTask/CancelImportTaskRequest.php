<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CancelImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importId
 */
class CancelImportTaskRequest extends Request
{
    /**
     * @param array{importId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
