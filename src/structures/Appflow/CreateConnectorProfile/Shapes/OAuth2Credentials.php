<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string $accessToken
 * @property string $refreshToken
 * @property ConnectorOAuthRequest $oAuthRequest
 */
class OAuth2Credentials extends Shape
{
    /**
     * @param array{
     *     clientId?: string,
     *     clientSecret?: string,
     *     accessToken?: string,
     *     refreshToken?: string,
     *     oAuthRequest?: ConnectorOAuthRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
