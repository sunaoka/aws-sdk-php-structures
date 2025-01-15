<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateIdentityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserPoolId
 * @property string|null $ProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null $ProviderType
 * @property array<string, string>|null $ProviderDetails
 * @property array<string, string>|null $AttributeMapping
 * @property list<string>|null $IdpIdentifiers
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 */
class IdentityProviderType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string|null,
     *     ProviderName?: string|null,
     *     ProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC'|null,
     *     ProviderDetails?: array<string, string>|null,
     *     AttributeMapping?: array<string, string>|null,
     *     IdpIdentifiers?: list<string>|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
