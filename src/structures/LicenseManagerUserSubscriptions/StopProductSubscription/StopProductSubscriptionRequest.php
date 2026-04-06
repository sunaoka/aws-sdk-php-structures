<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StopProductSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Domain
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $Product
 * @property string|null $ProductUserArn
 * @property string|null $Username
 */
class StopProductSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     Product?: string|null,
     *     ProductUserArn?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
