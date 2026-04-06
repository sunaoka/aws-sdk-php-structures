<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueFleetAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $queueId
 * @property string|null $fleetId
 */
class ListQueueFleetAssociationsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     queueId?: string|null,
     *     fleetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
