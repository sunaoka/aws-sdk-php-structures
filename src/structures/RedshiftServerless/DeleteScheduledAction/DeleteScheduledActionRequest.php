<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scheduledActionName
 */
class DeleteScheduledActionRequest extends Request
{
    /**
     * @param array{scheduledActionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
