<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC' $ProviderType
 * @property array<string, string> $ProviderDetails
 * @property array<string, string>|null $AttributeMapping
 * @property list<string>|null $IdpIdentifiers
 */
class CreateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ProviderName: string,
     *     ProviderType: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC',
     *     ProviderDetails: array<string, string>,
     *     AttributeMapping?: array<string, string>|null,
     *     IdpIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
