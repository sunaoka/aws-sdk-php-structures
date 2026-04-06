<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 */
class DescribeExecutionRequest extends Request
{
    /**
     * @param array{executionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
