<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIdentityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityProviderArn
 * @property string|null $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null $identityProviderType
 */
class IdentityProviderSummary extends Shape
{
    /**
     * @param array{
     *     identityProviderArn?: string|null,
     *     identityProviderName?: string|null,
     *     identityProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
