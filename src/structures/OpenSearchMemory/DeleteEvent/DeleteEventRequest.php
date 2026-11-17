<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\DeleteEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $eventId
 * @property string|null $actorId
 * @property string|null $sessionId
 */
class DeleteEventRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     eventId: string,
     *     actorId?: string|null,
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
