<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $identityProviderArn
 * @property array<string, string>|null $identityProviderDetails
 * @property string|null $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null $identityProviderType
 */
class UpdateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     identityProviderArn: string,
     *     identityProviderDetails?: array<string, string>|null,
     *     identityProviderName?: string|null,
     *     identityProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
