<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDeliverabilityDashboardOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property \Aws\Api\DateTimeResult $SubscriptionStartDate
 * @property InboxPlacementTrackingOption $InboxPlacementTrackingOption
 */
class DomainDeliverabilityTrackingOption extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     SubscriptionStartDate?: \Aws\Api\DateTimeResult,
     *     InboxPlacementTrackingOption?: InboxPlacementTrackingOption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
