<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $IdentityProviderArn
 * @property string|null $Product
 * @property Shapes\UpdateSettings $UpdateSettings
 */
class UpdateIdentityProviderSettingsRequest extends Request
{
    /**
     * @param array{
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     IdentityProviderArn?: string|null,
     *     Product?: string|null,
     *     UpdateSettings: Shapes\UpdateSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
