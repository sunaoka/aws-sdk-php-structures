<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $id
 * @property bool|null $retainPermissions
 * @property 'APPROVED'|'REVOKED'|'CANCELLED' $status
 * @property SubscribedListing $subscribedListing
 * @property SubscribedPrincipal $subscribedPrincipal
 * @property string|null $subscriptionRequestId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $updatedBy
 */
class SubscriptionSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     domainId: string,
     *     id: string,
     *     retainPermissions?: bool|null,
     *     status: 'APPROVED'|'REVOKED'|'CANCELLED',
     *     subscribedListing: SubscribedListing,
     *     subscribedPrincipal: SubscribedPrincipal,
     *     subscriptionRequestId?: string|null,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
