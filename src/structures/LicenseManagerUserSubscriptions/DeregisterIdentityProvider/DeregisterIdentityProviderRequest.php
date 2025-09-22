<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeregisterIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $Product
 * @property string|null $IdentityProviderArn
 */
class DeregisterIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     Product?: string|null,
     *     IdentityProviderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
