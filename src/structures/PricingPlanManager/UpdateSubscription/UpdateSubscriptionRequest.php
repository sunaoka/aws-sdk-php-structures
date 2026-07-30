<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\UpdateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $planTier
 * @property string|null $usageLevel
 * @property string $ifMatch
 * @property string|null $clientToken
 */
class UpdateSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     planTier: string,
     *     usageLevel?: string|null,
     *     ifMatch: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
