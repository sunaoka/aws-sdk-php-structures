<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 */
class DescribeNotebookInstanceLifecycleConfigRequest extends Request
{
    /**
     * @param array{NotebookInstanceLifecycleConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
