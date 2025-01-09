<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskExecutionArn
 */
class DescribeTaskExecutionRequest extends Request
{
    /**
     * @param array{TaskExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
