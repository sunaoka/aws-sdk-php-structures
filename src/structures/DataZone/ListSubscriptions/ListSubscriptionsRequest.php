<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approverProjectId
 * @property string $domainIdentifier
 * @property int $maxResults
 * @property string $nextToken
 * @property string $owningProjectId
 * @property 'CREATED_AT'|'UPDATED_AT' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'APPROVED'|'REVOKED'|'CANCELLED' $status
 * @property string $subscribedListingId
 * @property string $subscriptionRequestIdentifier
 */
class ListSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     approverProjectId?: string,
     *     domainIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     owningProjectId?: string,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     status?: 'APPROVED'|'REVOKED'|'CANCELLED',
     *     subscribedListingId?: string,
     *     subscriptionRequestIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
