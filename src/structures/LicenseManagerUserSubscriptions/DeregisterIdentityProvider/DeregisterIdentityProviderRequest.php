<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeregisterIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $IdentityProviderArn
 * @property string|null $Product
 */
class DeregisterIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     IdentityProviderArn?: string|null,
     *     Product?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
