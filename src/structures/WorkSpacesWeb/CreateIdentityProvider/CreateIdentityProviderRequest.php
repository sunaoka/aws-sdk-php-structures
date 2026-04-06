<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property array<string, string> $identityProviderDetails
 * @property string $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC' $identityProviderType
 * @property string $portalArn
 */
class CreateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     identityProviderDetails: array<string, string>,
     *     identityProviderName: string,
     *     identityProviderType: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC',
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
