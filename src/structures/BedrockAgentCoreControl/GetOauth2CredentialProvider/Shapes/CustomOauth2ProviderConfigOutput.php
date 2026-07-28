<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Discovery $oauthDiscovery
 * @property string|null $clientId
 * @property OnBehalfOfTokenExchangeConfigType|null $onBehalfOfTokenExchangeConfig
 * @property 'CLIENT_SECRET_BASIC'|'CLIENT_SECRET_POST'|'AWS_IAM_ID_TOKEN_JWT'|'PRIVATE_KEY_JWT'|null $clientAuthenticationMethod
 * @property PrivateEndpoint|null $privateEndpoint
 * @property list<PrivateEndpointOverride>|null $privateEndpointOverrides
 * @property PrivateKeyJwtConfig|null $privateKeyJwtConfig
 */
class CustomOauth2ProviderConfigOutput extends Shape
{
    /**
     * @param array{
     *     oauthDiscovery: Oauth2Discovery,
     *     clientId?: string|null,
     *     onBehalfOfTokenExchangeConfig?: OnBehalfOfTokenExchangeConfigType|null,
     *     clientAuthenticationMethod?: 'CLIENT_SECRET_BASIC'|'CLIENT_SECRET_POST'|'AWS_IAM_ID_TOKEN_JWT'|'PRIVATE_KEY_JWT'|null,
     *     privateEndpoint?: PrivateEndpoint|null,
     *     privateEndpointOverrides?: list<PrivateEndpointOverride>|null,
     *     privateKeyJwtConfig?: PrivateKeyJwtConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
