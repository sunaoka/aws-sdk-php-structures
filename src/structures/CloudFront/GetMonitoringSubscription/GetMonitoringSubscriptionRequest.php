<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetMonitoringSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 */
class GetMonitoringSubscriptionRequest extends Request
{
    /**
     * @param array{DistributionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
