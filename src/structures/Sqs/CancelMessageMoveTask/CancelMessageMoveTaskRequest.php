<?php

namespace Sunaoka\Aws\Structures\Sqs\CancelMessageMoveTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskHandle
 */
class CancelMessageMoveTaskRequest extends Request
{
    /**
     * @param array{TaskHandle: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
