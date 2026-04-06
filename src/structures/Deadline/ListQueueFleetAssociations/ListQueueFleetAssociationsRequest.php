<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueFleetAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $fleetId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $queueId
 */
class ListQueueFleetAssociationsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     queueId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
