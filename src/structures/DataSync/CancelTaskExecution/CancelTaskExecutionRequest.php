<?php

namespace Sunaoka\Aws\Structures\DataSync\CancelTaskExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskExecutionArn
 */
class CancelTaskExecutionRequest extends Request
{
    /**
     * @param array{TaskExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
