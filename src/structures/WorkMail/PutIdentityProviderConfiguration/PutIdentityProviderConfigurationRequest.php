<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutIdentityProviderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property 'IDENTITY_PROVIDER_ONLY'|'IDENTITY_PROVIDER_AND_DIRECTORY' $AuthenticationMode
 * @property Shapes\IdentityCenterConfiguration $IdentityCenterConfiguration
 * @property Shapes\PersonalAccessTokenConfiguration $PersonalAccessTokenConfiguration
 */
class PutIdentityProviderConfigurationRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     AuthenticationMode: 'IDENTITY_PROVIDER_ONLY'|'IDENTITY_PROVIDER_AND_DIRECTORY',
     *     IdentityCenterConfiguration: Shapes\IdentityCenterConfiguration,
     *     PersonalAccessTokenConfiguration: Shapes\PersonalAccessTokenConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
