<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeregisterIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $Product
 */
class DeregisterIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     IdentityProvider: Shapes\IdentityProvider,
     *     Product: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
