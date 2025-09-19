<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Username
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $Product
 * @property string|null $Domain
 * @property array<string, string>|null $Tags
 */
class StartProductSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Username: string,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     Product: string,
     *     Domain?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
