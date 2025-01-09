<?php

namespace Sunaoka\Aws\Structures\Emr\StopNotebookExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookExecutionId
 */
class StopNotebookExecutionRequest extends Request
{
    /**
     * @param array{NotebookExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
