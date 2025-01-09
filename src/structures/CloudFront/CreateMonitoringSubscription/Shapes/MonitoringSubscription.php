<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateMonitoringSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RealtimeMetricsSubscriptionConfig $RealtimeMetricsSubscriptionConfig
 */
class MonitoringSubscription extends Shape
{
    /**
     * @param array{RealtimeMetricsSubscriptionConfig?: RealtimeMetricsSubscriptionConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
