<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskIdentifier
 */
class GetExportTaskRequest extends Request
{
    /**
     * @param array{taskIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
