<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $environmentId
 * @property string|null $subscriptionTargetId
 * @property string|null $subscribedListingId
 * @property string|null $subscriptionId
 * @property string|null $owningProjectId
 * @property string|null $owningIamPrincipalArn
 * @property string|null $owningUserId
 * @property string|null $owningGroupId
 * @property 'CREATED_AT'|'UPDATED_AT'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListSubscriptionGrantsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentId?: string|null,
     *     subscriptionTargetId?: string|null,
     *     subscribedListingId?: string|null,
     *     subscriptionId?: string|null,
     *     owningProjectId?: string|null,
     *     owningIamPrincipalArn?: string|null,
     *     owningUserId?: string|null,
     *     owningGroupId?: string|null,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
