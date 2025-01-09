<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIdentityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityProviderArn
 * @property string $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC' $identityProviderType
 */
class IdentityProviderSummary extends Shape
{
    /**
     * @param array{
     *     identityProviderArn: string,
     *     identityProviderName?: string,
     *     identityProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
