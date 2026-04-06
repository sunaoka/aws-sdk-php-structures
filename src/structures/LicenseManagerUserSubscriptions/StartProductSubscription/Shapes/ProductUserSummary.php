<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property IdentityProvider $IdentityProvider
 * @property string $Product
 * @property string|null $ProductUserArn
 * @property string $Status
 * @property string|null $StatusMessage
 * @property string|null $SubscriptionEndDate
 * @property string|null $SubscriptionStartDate
 * @property string $Username
 */
class ProductUserSummary extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     IdentityProvider: IdentityProvider,
     *     Product: string,
     *     ProductUserArn?: string|null,
     *     Status: string,
     *     StatusMessage?: string|null,
     *     SubscriptionEndDate?: string|null,
     *     SubscriptionStartDate?: string|null,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
