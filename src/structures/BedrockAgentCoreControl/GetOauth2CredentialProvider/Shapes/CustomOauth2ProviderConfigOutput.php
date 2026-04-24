<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Discovery $oauthDiscovery
 * @property string|null $clientId
 * @property PrivateEndpoint|null $privateEndpoint
 * @property list<PrivateEndpointOverride>|null $privateEndpointOverrides
 */
class CustomOauth2ProviderConfigOutput extends Shape
{
    /**
     * @param array{
     *     oauthDiscovery: Oauth2Discovery,
     *     clientId?: string|null,
     *     privateEndpoint?: PrivateEndpoint|null,
     *     privateEndpointOverrides?: list<PrivateEndpointOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
