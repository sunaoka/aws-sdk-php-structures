<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityDashboardOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $DashboardEnabled
 * @property \Aws\Api\DateTimeResult $SubscriptionExpiryDate
 * @property 'ACTIVE'|'PENDING_EXPIRATION'|'DISABLED' $AccountStatus
 * @property list<Shapes\DomainDeliverabilityTrackingOption> $ActiveSubscribedDomains
 * @property list<Shapes\DomainDeliverabilityTrackingOption> $PendingExpirationSubscribedDomains
 */
class GetDeliverabilityDashboardOptionsResponse extends Response
{
}
