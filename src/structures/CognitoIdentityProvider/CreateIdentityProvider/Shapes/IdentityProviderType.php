<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateIdentityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property string $ProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC' $ProviderType
 * @property array<string, string> $ProviderDetails
 * @property array<string, string> $AttributeMapping
 * @property list<string> $IdpIdentifiers
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreationDate
 */
class IdentityProviderType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string,
     *     ProviderName?: string,
     *     ProviderType?: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC',
     *     ProviderDetails?: array<string, string>,
     *     AttributeMapping?: array<string, string>,
     *     IdpIdentifiers?: list<string>,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     CreationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
