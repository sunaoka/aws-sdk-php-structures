<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessToken
 * @property string $refreshToken
 * @property ConnectorOAuthRequest $oAuthRequest
 * @property string $clientCredentialsArn
 * @property 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER' $oAuth2GrantType
 * @property string $jwtToken
 */
class SalesforceConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     accessToken?: string,
     *     refreshToken?: string,
     *     oAuthRequest?: ConnectorOAuthRequest,
     *     clientCredentialsArn?: string,
     *     oAuth2GrantType?: 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER',
     *     jwtToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
