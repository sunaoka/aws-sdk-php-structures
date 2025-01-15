<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueFleetAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $queueId
 * @property string|null $fleetId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListQueueFleetAssociationsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId?: string|null,
     *     fleetId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
