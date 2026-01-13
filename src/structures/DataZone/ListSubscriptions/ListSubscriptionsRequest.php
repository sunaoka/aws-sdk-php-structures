<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $subscriptionRequestIdentifier
 * @property 'APPROVED'|'REVOKED'|'CANCELLED'|null $status
 * @property string|null $subscribedListingId
 * @property string|null $owningProjectId
 * @property string|null $owningIamPrincipalArn
 * @property string|null $owningUserId
 * @property string|null $owningGroupId
 * @property string|null $approverProjectId
 * @property 'CREATED_AT'|'UPDATED_AT'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     subscriptionRequestIdentifier?: string|null,
     *     status?: 'APPROVED'|'REVOKED'|'CANCELLED'|null,
     *     subscribedListingId?: string|null,
     *     owningProjectId?: string|null,
     *     owningIamPrincipalArn?: string|null,
     *     owningUserId?: string|null,
     *     owningGroupId?: string|null,
     *     approverProjectId?: string|null,
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
