<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetEventAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventActionId
 */
class GetEventActionRequest extends Request
{
    /**
     * @param array{EventActionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
