<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 */
class DeleteNotebookInstanceLifecycleConfigRequest extends Request
{
    /**
     * @param array{NotebookInstanceLifecycleConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
