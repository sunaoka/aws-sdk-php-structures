<?php

namespace Sunaoka\Aws\Structures\FSx\CancelDataRepositoryTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskId
 */
class CancelDataRepositoryTaskRequest extends Request
{
    /**
     * @param array{TaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
