<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopNotebookInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceName
 */
class StopNotebookInstanceRequest extends Request
{
    /**
     * @param array{NotebookInstanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
