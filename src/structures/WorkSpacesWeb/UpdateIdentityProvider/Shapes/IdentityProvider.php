<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIdentityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityProviderArn
 * @property array<string, string>|null $identityProviderDetails
 * @property string|null $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null $identityProviderType
 */
class IdentityProvider extends Shape
{
    /**
     * @param array{
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
