<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\CreateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planFamily
 * @property string $planTier
 * @property string|null $usageLevel
 * @property list<string> $resourceArns
 * @property 'MANUAL'|'IMMEDIATE'|null $approvalMode
 * @property string|null $clientToken
 */
class CreateSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     planFamily: string,
     *     planTier: string,
     *     usageLevel?: string|null,
     *     resourceArns: list<string>,
     *     approvalMode?: 'MANUAL'|'IMMEDIATE'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
