<?php

namespace Sunaoka\Aws\Structures\DataSync\DeleteTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 */
class DeleteTaskRequest extends Request
{
    /**
     * @param array{TaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
