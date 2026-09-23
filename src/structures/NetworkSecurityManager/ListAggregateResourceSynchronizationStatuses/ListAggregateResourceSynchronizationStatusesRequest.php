<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAggregateResourceSynchronizationStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IN_SYNC'|'OUT_OF_SYNC'|'NOT_APPLICABLE'|null $synchronizationStatus
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAggregateResourceSynchronizationStatusesRequest extends Request
{
    /**
     * @param array{
     *     synchronizationStatus?: 'IN_SYNC'|'OUT_OF_SYNC'|'NOT_APPLICABLE'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
