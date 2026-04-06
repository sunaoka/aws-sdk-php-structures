<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $createdBy
 * @property string|null $updatedBy
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $environmentId
 * @property string $subscriptionTargetId
 * @property GrantedEntity $grantedEntity
 * @property 'PENDING'|'IN_PROGRESS'|'GRANT_FAILED'|'REVOKE_FAILED'|'GRANT_AND_REVOKE_FAILED'|'COMPLETED'|'INACCESSIBLE' $status
 * @property list<SubscribedAsset>|null $assets
 * @property string|null $subscriptionId
 */
class SubscriptionGrantSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     createdBy: string,
     *     updatedBy?: string|null,
     *     domainId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     environmentId?: string|null,
     *     subscriptionTargetId: string,
     *     grantedEntity: GrantedEntity,
     *     status: 'PENDING'|'IN_PROGRESS'|'GRANT_FAILED'|'REVOKE_FAILED'|'GRANT_AND_REVOKE_FAILED'|'COMPLETED'|'INACCESSIBLE',
     *     assets?: list<SubscribedAsset>|null,
     *     subscriptionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
