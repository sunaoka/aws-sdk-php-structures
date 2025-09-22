<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $Product
 * @property IdentityProvider $IdentityProvider
 * @property string $Status
 * @property string|null $ProductUserArn
 * @property string|null $StatusMessage
 * @property string|null $Domain
 * @property string|null $SubscriptionStartDate
 * @property string|null $SubscriptionEndDate
 */
class ProductUserSummary extends Shape
{
    /**
     * @param array{
     *     Username: string,
     *     Product: string,
     *     IdentityProvider: IdentityProvider,
     *     Status: string,
     *     ProductUserArn?: string|null,
     *     StatusMessage?: string|null,
     *     Domain?: string|null,
     *     SubscriptionStartDate?: string|null,
     *     SubscriptionEndDate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
