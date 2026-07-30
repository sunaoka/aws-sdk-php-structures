<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\GetSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetSubscriptionRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
