<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTaskExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskExecutionArn
 * @property Shapes\Options $Options
 */
class UpdateTaskExecutionRequest extends Request
{
    /**
     * @param array{
     *     TaskExecutionArn: string,
     *     Options: Shapes\Options
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
