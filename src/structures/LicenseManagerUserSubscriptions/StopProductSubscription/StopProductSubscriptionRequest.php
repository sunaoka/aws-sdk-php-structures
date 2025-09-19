<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StopProductSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Username
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $Product
 * @property string|null $ProductUserArn
 * @property string|null $Domain
 */
class StopProductSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Username?: string|null,
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     Product?: string|null,
     *     ProductUserArn?: string|null,
     *     Domain?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
