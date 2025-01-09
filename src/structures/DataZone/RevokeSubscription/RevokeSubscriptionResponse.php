<?php

namespace Sunaoka\Aws\Structures\DataZone\RevokeSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $id
 * @property bool $retainPermissions
 * @property 'APPROVED'|'REVOKED'|'CANCELLED' $status
 * @property Shapes\SubscribedListing $subscribedListing
 * @property Shapes\SubscribedPrincipal $subscribedPrincipal
 * @property string $subscriptionRequestId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class RevokeSubscriptionResponse extends Response
{
}
