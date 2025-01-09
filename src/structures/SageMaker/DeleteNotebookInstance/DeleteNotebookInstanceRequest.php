<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteNotebookInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceName
 */
class DeleteNotebookInstanceRequest extends Request
{
    /**
     * @param array{NotebookInstanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
