<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskIdentifier
 */
class GetImportTaskRequest extends Request
{
    /**
     * @param array{taskIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
