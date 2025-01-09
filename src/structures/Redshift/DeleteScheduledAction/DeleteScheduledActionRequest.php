<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteScheduledAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledActionName
 */
class DeleteScheduledActionRequest extends Request
{
    /**
     * @param array{ScheduledActionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
