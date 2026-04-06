<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $createdBy
 * @property string|null $updatedBy
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $environmentId
 * @property string $subscriptionTargetId
 * @property Shapes\GrantedEntity $grantedEntity
 * @property 'PENDING'|'IN_PROGRESS'|'GRANT_FAILED'|'REVOKE_FAILED'|'GRANT_AND_REVOKE_FAILED'|'COMPLETED'|'INACCESSIBLE' $status
 * @property list<Shapes\SubscribedAsset>|null $assets
 * @property string|null $subscriptionId
 */
class GetSubscriptionGrantResponse extends Response
{
}
