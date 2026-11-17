<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\ListEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $actorId
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult|null $eventTimestampBefore
 * @property \Aws\Api\DateTimeResult|null $eventTimestampAfter
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property array<string, string>|null $metadataFilters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEventsRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     actorId: string,
     *     sessionId: string,
     *     eventTimestampBefore?: \Aws\Api\DateTimeResult|null,
     *     eventTimestampAfter?: \Aws\Api\DateTimeResult|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     metadataFilters?: array<string, string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
