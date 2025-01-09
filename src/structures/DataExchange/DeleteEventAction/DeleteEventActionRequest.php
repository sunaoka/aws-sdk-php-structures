<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteEventAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventActionId
 */
class DeleteEventActionRequest extends Request
{
    /**
     * @param array{EventActionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
