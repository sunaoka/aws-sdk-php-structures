<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\RegisterIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $Product
 * @property Shapes\Settings|null $Settings
 */
class RegisterIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     IdentityProvider: Shapes\IdentityProvider,
     *     Product: string,
     *     Settings?: Shapes\Settings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
