<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueFleetAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $fleetId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListQueueFleetAssociationsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId?: string,
     *     fleetId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
