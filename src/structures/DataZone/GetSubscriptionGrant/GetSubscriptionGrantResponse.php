<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SubscribedAsset> $assets
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property Shapes\GrantedEntity $grantedEntity
 * @property string $id
 * @property 'PENDING'|'IN_PROGRESS'|'GRANT_FAILED'|'REVOKE_FAILED'|'GRANT_AND_REVOKE_FAILED'|'COMPLETED'|'INACCESSIBLE' $status
 * @property string $subscriptionId
 * @property string $subscriptionTargetId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetSubscriptionGrantResponse extends Response
{
}
