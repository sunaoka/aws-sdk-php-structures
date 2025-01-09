<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SubscribedAsset> $assets
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property GrantedEntity $grantedEntity
 * @property string $id
 * @property 'PENDING'|'IN_PROGRESS'|'GRANT_FAILED'|'REVOKE_FAILED'|'GRANT_AND_REVOKE_FAILED'|'COMPLETED'|'INACCESSIBLE' $status
 * @property string $subscriptionId
 * @property string $subscriptionTargetId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class SubscriptionGrantSummary extends Shape
{
    /**
     * @param array{
     *     assets?: list<SubscribedAsset>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     domainId: string,
     *     grantedEntity: GrantedEntity,
     *     id: string,
     *     status: 'PENDING'|'IN_PROGRESS'|'GRANT_FAILED'|'REVOKE_FAILED'|'GRANT_AND_REVOKE_FAILED'|'COMPLETED'|'INACCESSIBLE',
     *     subscriptionId?: string,
     *     subscriptionTargetId: string,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
