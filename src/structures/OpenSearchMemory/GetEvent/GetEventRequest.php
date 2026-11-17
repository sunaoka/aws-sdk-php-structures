<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $eventId
 * @property string|null $actorId
 * @property string|null $sessionId
 */
class GetEventRequest extends Request
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
