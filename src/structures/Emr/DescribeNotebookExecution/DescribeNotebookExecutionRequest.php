<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeNotebookExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookExecutionId
 */
class DescribeNotebookExecutionRequest extends Request
{
    /**
     * @param array{NotebookExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
