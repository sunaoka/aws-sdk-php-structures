<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $environmentId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $owningGroupId
 * @property string|null $owningProjectId
 * @property string|null $owningUserId
 * @property 'CREATED_AT'|'UPDATED_AT'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $subscribedListingId
 * @property string|null $subscriptionId
 * @property string|null $subscriptionTargetId
 */
class ListSubscriptionGrantsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentId?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     owningGroupId?: string|null,
     *     owningProjectId?: string|null,
     *     owningUserId?: string|null,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     subscribedListingId?: string|null,
     *     subscriptionId?: string|null,
     *     subscriptionTargetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
