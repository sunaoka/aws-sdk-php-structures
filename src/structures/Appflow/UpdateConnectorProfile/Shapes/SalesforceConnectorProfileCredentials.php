<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessToken
 * @property string|null $refreshToken
 * @property ConnectorOAuthRequest|null $oAuthRequest
 * @property string|null $clientCredentialsArn
 * @property 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'|null $oAuth2GrantType
 * @property string|null $jwtToken
 */
class SalesforceConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     accessToken?: string|null,
     *     refreshToken?: string|null,
     *     oAuthRequest?: ConnectorOAuthRequest|null,
     *     clientCredentialsArn?: string|null,
     *     oAuth2GrantType?: 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'|null,
     *     jwtToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
