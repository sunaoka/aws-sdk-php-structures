<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\UpdateIdentityPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityPoolName
 * @property bool $AllowUnauthenticatedIdentities
 * @property bool $AllowClassicFlow
 * @property array<string, string> $SupportedLoginProviders
 * @property string $DeveloperProviderName
 * @property list<string> $OpenIdConnectProviderARNs
 * @property list<Shapes\CognitoIdentityProvider> $CognitoIdentityProviders
 * @property list<string> $SamlProviderARNs
 * @property array<string, string> $IdentityPoolTags
 */
class UpdateIdentityPoolRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityPoolName: string,
     *     AllowUnauthenticatedIdentities: bool,
     *     AllowClassicFlow?: bool,
     *     SupportedLoginProviders?: array<string, string>,
     *     DeveloperProviderName?: string,
     *     OpenIdConnectProviderARNs?: list<string>,
     *     CognitoIdentityProviders?: list<Shapes\CognitoIdentityProvider>,
     *     SamlProviderARNs?: list<string>,
     *     IdentityPoolTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
