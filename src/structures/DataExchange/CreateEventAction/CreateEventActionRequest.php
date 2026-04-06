<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateEventAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Action $Action
 * @property Shapes\Event $Event
 * @property array<string, string>|null $Tags
 */
class CreateEventActionRequest extends Request
{
    /**
     * @param array{
     *     Action: Shapes\Action,
     *     Event: Shapes\Event,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
