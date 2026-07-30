<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\ApprovePaidSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $ifMatch
 * @property string|null $clientToken
 */
class ApprovePaidSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     ifMatch: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
