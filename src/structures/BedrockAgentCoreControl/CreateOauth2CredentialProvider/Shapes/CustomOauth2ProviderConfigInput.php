<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Discovery $oauthDiscovery
 * @property string $clientId
 * @property string $clientSecret
 * @property PrivateEndpoint|null $privateEndpoint
 * @property list<PrivateEndpointOverride>|null $privateEndpointOverrides
 */
class CustomOauth2ProviderConfigInput extends Shape
{
    /**
     * @param array{
     *     oauthDiscovery: Oauth2Discovery,
     *     clientId: string,
     *     clientSecret: string,
     *     privateEndpoint?: PrivateEndpoint|null,
     *     privateEndpointOverrides?: list<PrivateEndpointOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
