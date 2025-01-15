<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityDashboardOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property \Aws\Api\DateTimeResult|null $SubscriptionStartDate
 * @property InboxPlacementTrackingOption|null $InboxPlacementTrackingOption
 */
class DomainDeliverabilityTrackingOption extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     SubscriptionStartDate?: \Aws\Api\DateTimeResult|null,
     *     InboxPlacementTrackingOption?: InboxPlacementTrackingOption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
