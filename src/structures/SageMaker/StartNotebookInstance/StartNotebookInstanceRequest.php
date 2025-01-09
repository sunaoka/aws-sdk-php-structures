<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartNotebookInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceName
 */
class StartNotebookInstanceRequest extends Request
{
    /**
     * @param array{NotebookInstanceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
