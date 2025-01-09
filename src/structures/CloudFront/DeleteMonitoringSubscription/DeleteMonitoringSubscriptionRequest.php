<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteMonitoringSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 */
class DeleteMonitoringSubscriptionRequest extends Request
{
    /**
     * @param array{DistributionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
