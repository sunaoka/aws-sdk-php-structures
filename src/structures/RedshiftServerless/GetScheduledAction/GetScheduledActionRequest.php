<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scheduledActionName
 */
class GetScheduledActionRequest extends Request
{
    /**
     * @param array{scheduledActionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
