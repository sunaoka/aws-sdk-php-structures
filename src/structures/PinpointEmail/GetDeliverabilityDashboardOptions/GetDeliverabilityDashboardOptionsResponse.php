<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityDashboardOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $DashboardEnabled
 * @property \Aws\Api\DateTimeResult|null $SubscriptionExpiryDate
 * @property 'ACTIVE'|'PENDING_EXPIRATION'|'DISABLED'|null $AccountStatus
 * @property list<Shapes\DomainDeliverabilityTrackingOption>|null $ActiveSubscribedDomains
 * @property list<Shapes\DomainDeliverabilityTrackingOption>|null $PendingExpirationSubscribedDomains
 */
class GetDeliverabilityDashboardOptionsResponse extends Response
{
}
