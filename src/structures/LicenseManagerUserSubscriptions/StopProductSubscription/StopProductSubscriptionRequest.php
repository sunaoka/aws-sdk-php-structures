<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StopProductSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $Product
 * @property string $ProductUserArn
 * @property string $Username
 */
class StopProductSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string,
     *     IdentityProvider?: Shapes\IdentityProvider,
     *     Product?: string,
     *     ProductUserArn?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
