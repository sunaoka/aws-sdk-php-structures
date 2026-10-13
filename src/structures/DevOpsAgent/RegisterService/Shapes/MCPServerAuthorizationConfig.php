<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MCPServerOAuthClientCredentialsConfig|null $oAuthClientCredentials
 * @property MCPServerOAuth3LOConfig|null $oAuth3LO
 * @property MCPServerAPIKeyConfig|null $apiKey
 * @property MCPServerBearerTokenConfig|null $bearerToken
 * @property MCPServerCustomHeadersConfig|null $customHeaders
 * @property MCPServerAuthorizationDiscoveryConfig|null $authorizationDiscovery
 */
class MCPServerAuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     oAuthClientCredentials?: MCPServerOAuthClientCredentialsConfig|null,
     *     oAuth3LO?: MCPServerOAuth3LOConfig|null,
     *     apiKey?: MCPServerAPIKeyConfig|null,
     *     bearerToken?: MCPServerBearerTokenConfig|null,
     *     customHeaders?: MCPServerCustomHeadersConfig|null,
     *     authorizationDiscovery?: MCPServerAuthorizationDiscoveryConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
