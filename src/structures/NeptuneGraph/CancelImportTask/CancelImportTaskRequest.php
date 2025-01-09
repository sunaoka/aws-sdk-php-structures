<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CancelImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskIdentifier
 */
class CancelImportTaskRequest extends Request
{
    /**
     * @param array{taskIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
