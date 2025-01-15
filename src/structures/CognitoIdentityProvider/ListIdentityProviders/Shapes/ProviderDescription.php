<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListIdentityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null $ProviderType
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 */
class ProviderDescription extends Shape
{
    /**
     * @param array{
     *     ProviderName?: string|null,
     *     ProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
