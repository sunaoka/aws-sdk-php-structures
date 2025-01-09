<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $IdentityProviderArn
 * @property string $Product
 * @property Shapes\UpdateSettings $UpdateSettings
 */
class UpdateIdentityProviderSettingsRequest extends Request
{
    /**
     * @param array{
     *     IdentityProvider?: Shapes\IdentityProvider,
     *     IdentityProviderArn?: string,
     *     Product?: string,
     *     UpdateSettings: Shapes\UpdateSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
