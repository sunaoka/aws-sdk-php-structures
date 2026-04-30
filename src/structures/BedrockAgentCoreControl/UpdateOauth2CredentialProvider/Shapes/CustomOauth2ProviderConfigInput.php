<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Discovery $oauthDiscovery
 * @property string|null $clientId
 * @property string|null $clientSecret
 * @property PrivateEndpoint|null $privateEndpoint
 * @property list<PrivateEndpointOverride>|null $privateEndpointOverrides
 * @property OnBehalfOfTokenExchangeConfigType|null $onBehalfOfTokenExchangeConfig
 * @property 'CLIENT_SECRET_BASIC'|'CLIENT_SECRET_POST'|'AWS_IAM_ID_TOKEN_JWT'|null $clientAuthenticationMethod
 */
class CustomOauth2ProviderConfigInput extends Shape
{
    /**
     * @param array{
     *     oauthDiscovery: Oauth2Discovery,
     *     clientId?: string|null,
     *     clientSecret?: string|null,
     *     privateEndpoint?: PrivateEndpoint|null,
     *     privateEndpointOverrides?: list<PrivateEndpointOverride>|null,
     *     onBehalfOfTokenExchangeConfig?: OnBehalfOfTokenExchangeConfigType|null,
     *     clientAuthenticationMethod?: 'CLIENT_SECRET_BASIC'|'CLIENT_SECRET_POST'|'AWS_IAM_ID_TOKEN_JWT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
