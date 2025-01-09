<?php

namespace Sunaoka\Aws\Structures\Iot\StopThingRegistrationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class StopThingRegistrationTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
