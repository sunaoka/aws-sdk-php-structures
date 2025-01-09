<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property IdentityProvider $IdentityProvider
 * @property string $Product
 * @property string $ProductUserArn
 * @property string $Status
 * @property string $StatusMessage
 * @property string $SubscriptionEndDate
 * @property string $SubscriptionStartDate
 * @property string $Username
 */
class ProductUserSummary extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     IdentityProvider: IdentityProvider,
     *     Product: string,
     *     ProductUserArn?: string,
     *     Status: string,
     *     StatusMessage?: string,
     *     SubscriptionEndDate?: string,
     *     SubscriptionStartDate?: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
