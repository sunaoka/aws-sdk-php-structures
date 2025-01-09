<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trackingId
 * @property string $userId
 * @property string $sessionId
 * @property list<Shapes\Event> $eventList
 */
class PutEventsRequest extends Request
{
    /**
     * @param array{
     *     trackingId: string,
     *     userId?: string,
     *     sessionId: string,
     *     eventList: list<Shapes\Event>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
