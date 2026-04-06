<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateIdentityProviderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property 'SAML' $IdentityProviderType
 * @property string|null $IdentityProviderSamlMetadata
 */
class UpdateIdentityProviderConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     IdentityProviderType: 'SAML',
     *     IdentityProviderSamlMetadata?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
