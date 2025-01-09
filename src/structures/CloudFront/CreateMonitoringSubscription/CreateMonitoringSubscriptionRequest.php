<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateMonitoringSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property Shapes\MonitoringSubscription $MonitoringSubscription
 */
class CreateMonitoringSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     MonitoringSubscription: Shapes\MonitoringSubscription
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
