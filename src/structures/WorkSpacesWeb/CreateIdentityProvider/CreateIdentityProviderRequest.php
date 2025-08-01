<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $identityProviderName
 * @property 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC' $identityProviderType
 * @property array<string, string> $identityProviderDetails
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     identityProviderName: string,
     *     identityProviderType: 'SAML'|'Facebook'|'Google'|'LoginWithAmazon'|'SignInWithApple'|'OIDC',
     *     identityProviderDetails: array<string, string>,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
