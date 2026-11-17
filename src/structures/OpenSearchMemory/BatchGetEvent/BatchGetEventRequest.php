<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\BatchGetEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string|null $actorId
 * @property string|null $sessionId
 * @property list<string> $eventIds
 */
class BatchGetEventRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     actorId?: string|null,
     *     sessionId?: string|null,
     *     eventIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
