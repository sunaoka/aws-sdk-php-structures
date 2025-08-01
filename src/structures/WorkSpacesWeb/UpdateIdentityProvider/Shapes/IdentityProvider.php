<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIdentityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityProviderArn
 * @property string|null $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null $identityProviderType
 * @property array<string, string>|null $identityProviderDetails
 */
class IdentityProvider extends Shape
{
    /**
     * @param array{
     *     identityProviderArn: string,
     *     identityProviderName?: string|null,
     *     identityProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null,
     *     identityProviderDetails?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
