<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\CreateIdentityPool;

use Sunaoka\Aws\Structures\Response;

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
class CreateIdentityPoolResponse extends Response
{
}
