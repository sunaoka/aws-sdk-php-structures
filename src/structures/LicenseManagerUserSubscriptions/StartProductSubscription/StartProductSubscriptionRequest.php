<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $Product
 * @property array<string, string> $Tags
 * @property string $Username
 */
class StartProductSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     Product: string,
     *     Tags?: array<string, string>,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
