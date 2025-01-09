<?php

namespace Sunaoka\Aws\Structures\Rds\CancelExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportTaskIdentifier
 */
class CancelExportTaskRequest extends Request
{
    /**
     * @param array{ExportTaskIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
