<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $approverProjectId
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $owningProjectId
 * @property 'CREATED_AT'|'UPDATED_AT'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|null $status
 * @property string|null $subscribedListingId
 */
class ListSubscriptionRequestsRequest extends Request
{
    /**
     * @param array{
     *     approverProjectId?: string|null,
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     owningProjectId?: string|null,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     status?: 'PENDING'|'ACCEPTED'|'REJECTED'|null,
     *     subscribedListingId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
