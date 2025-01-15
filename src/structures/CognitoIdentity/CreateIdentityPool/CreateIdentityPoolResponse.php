<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\CreateIdentityPool;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityPoolName
 * @property bool $AllowUnauthenticatedIdentities
 * @property bool|null $AllowClassicFlow
 * @property array<string, string>|null $SupportedLoginProviders
 * @property string|null $DeveloperProviderName
 * @property list<string>|null $OpenIdConnectProviderARNs
 * @property list<Shapes\CognitoIdentityProvider>|null $CognitoIdentityProviders
 * @property list<string>|null $SamlProviderARNs
 * @property array<string, string>|null $IdentityPoolTags
 */
class CreateIdentityPoolResponse extends Response
{
}
