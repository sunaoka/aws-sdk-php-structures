<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemoteAgentAPIKeyConfig|null $apiKey
 * @property RemoteAgentOAuthClientCredentialsConfig|null $oAuthClientCredentials
 * @property RemoteAgentBearerTokenConfig|null $bearerToken
 */
class RemoteAgentAuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     apiKey?: RemoteAgentAPIKeyConfig|null,
     *     oAuthClientCredentials?: RemoteAgentOAuthClientCredentialsConfig|null,
     *     bearerToken?: RemoteAgentBearerTokenConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
