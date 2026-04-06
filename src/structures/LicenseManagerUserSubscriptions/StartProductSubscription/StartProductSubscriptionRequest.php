<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Domain
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $Product
 * @property array<string, string>|null $Tags
 * @property string $Username
 */
class StartProductSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     Product: string,
     *     Tags?: array<string, string>|null,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
