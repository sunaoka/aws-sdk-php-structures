<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identityProviderArn
 * @property string|null $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null $identityProviderType
 * @property array<string, string>|null $identityProviderDetails
 * @property string|null $clientToken
 */
class UpdateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     identityProviderArn: string,
     *     identityProviderName?: string|null,
     *     identityProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null,
     *     identityProviderDetails?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
