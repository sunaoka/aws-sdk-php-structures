<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentId
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property string $owningProjectId
 * @property 'CREATED_AT'|'UPDATED_AT' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $subscribedListingId
 * @property string $subscriptionId
 * @property string $subscriptionTargetId
 */
class ListSubscriptionGrantsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentId?: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     owningProjectId?: string,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     subscribedListingId?: string,
     *     subscriptionId?: string,
     *     subscriptionTargetId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
