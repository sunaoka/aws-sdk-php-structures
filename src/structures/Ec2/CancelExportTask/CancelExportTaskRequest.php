<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportTaskId
 */
class CancelExportTaskRequest extends Request
{
    /**
     * @param array{ExportTaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
