<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineForExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 */
class DescribeStateMachineForExecutionRequest extends Request
{
    /**
     * @param array{executionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
