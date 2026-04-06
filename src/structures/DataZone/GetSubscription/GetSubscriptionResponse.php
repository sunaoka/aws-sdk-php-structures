<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $createdBy
 * @property string|null $updatedBy
 * @property string $domainId
 * @property 'APPROVED'|'REVOKED'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\SubscribedPrincipal $subscribedPrincipal
 * @property Shapes\SubscribedListing $subscribedListing
 * @property string|null $subscriptionRequestId
 * @property bool|null $retainPermissions
 */
class GetSubscriptionResponse extends Response
{
}
