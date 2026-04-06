<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateEventAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Action $Action
 * @property Shapes\Event $Event
 */
class CreateEventActionRequest extends Request
{
    /**
     * @param array{
     *     Action: Shapes\Action,
     *     Event: Shapes\Event
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
