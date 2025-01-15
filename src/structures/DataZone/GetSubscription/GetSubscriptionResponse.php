<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $id
 * @property bool|null $retainPermissions
 * @property 'APPROVED'|'REVOKED'|'CANCELLED' $status
 * @property Shapes\SubscribedListing $subscribedListing
 * @property Shapes\SubscribedPrincipal $subscribedPrincipal
 * @property string|null $subscriptionRequestId
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $updatedBy
 */
class GetSubscriptionResponse extends Response
{
}
