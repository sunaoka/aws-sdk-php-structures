<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientId
 * @property string|null $clientSecret
 * @property string|null $accessToken
 * @property string|null $refreshToken
 * @property ConnectorOAuthRequest|null $oAuthRequest
 */
class OAuth2Credentials extends Shape
{
    /**
     * @param array{
     *     clientId?: string|null,
     *     clientSecret?: string|null,
     *     accessToken?: string|null,
     *     refreshToken?: string|null,
     *     oAuthRequest?: ConnectorOAuthRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
