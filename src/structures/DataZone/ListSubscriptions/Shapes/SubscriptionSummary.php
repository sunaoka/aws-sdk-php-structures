<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $createdBy
 * @property string|null $updatedBy
 * @property string $domainId
 * @property 'APPROVED'|'REVOKED'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property SubscribedPrincipal $subscribedPrincipal
 * @property SubscribedListing $subscribedListing
 * @property string|null $subscriptionRequestId
 * @property bool|null $retainPermissions
 */
class SubscriptionSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     createdBy: string,
     *     updatedBy?: string|null,
     *     domainId: string,
     *     status: 'APPROVED'|'REVOKED'|'CANCELLED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     subscribedPrincipal: SubscribedPrincipal,
     *     subscribedListing: SubscribedListing,
     *     subscriptionRequestId?: string|null,
     *     retainPermissions?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
