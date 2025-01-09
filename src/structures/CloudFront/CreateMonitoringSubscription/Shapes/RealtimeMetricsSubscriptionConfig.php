<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateMonitoringSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $RealtimeMetricsSubscriptionStatus
 */
class RealtimeMetricsSubscriptionConfig extends Shape
{
    /**
     * @param array{RealtimeMetricsSubscriptionStatus: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
