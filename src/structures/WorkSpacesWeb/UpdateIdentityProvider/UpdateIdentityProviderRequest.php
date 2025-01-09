<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $identityProviderArn
 * @property array<string, string> $identityProviderDetails
 * @property string $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC' $identityProviderType
 */
class UpdateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     identityProviderArn: string,
     *     identityProviderDetails?: array<string, string>,
     *     identityProviderName?: string,
     *     identityProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
