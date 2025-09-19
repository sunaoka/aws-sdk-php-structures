<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentityProvider|null $IdentityProvider
 * @property string|null $Product
 * @property string|null $IdentityProviderArn
 * @property Shapes\UpdateSettings $UpdateSettings
 */
class UpdateIdentityProviderSettingsRequest extends Request
{
    /**
     * @param array{
     *     IdentityProvider?: Shapes\IdentityProvider|null,
     *     Product?: string|null,
     *     IdentityProviderArn?: string|null,
     *     UpdateSettings: Shapes\UpdateSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
