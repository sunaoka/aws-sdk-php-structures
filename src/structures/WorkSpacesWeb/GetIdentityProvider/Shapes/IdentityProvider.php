<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetIdentityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityProviderArn
 * @property array<string, string> $identityProviderDetails
 * @property string $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC' $identityProviderType
 */
class IdentityProvider extends Shape
{
    /**
     * @param array{
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
