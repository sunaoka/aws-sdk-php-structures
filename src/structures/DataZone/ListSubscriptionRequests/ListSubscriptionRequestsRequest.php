<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approverProjectId
 * @property string $domainIdentifier
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property string $owningProjectId
 * @property 'CREATED_AT'|'UPDATED_AT' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'PENDING'|'ACCEPTED'|'REJECTED' $status
 * @property string $subscribedListingId
 */
class ListSubscriptionRequestsRequest extends Request
{
    /**
     * @param array{
     *     approverProjectId?: string,
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     owningProjectId?: string,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     status?: 'PENDING'|'ACCEPTED'|'REJECTED',
     *     subscribedListingId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
