<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessToken
 * @property string $refreshToken
 * @property ConnectorOAuthRequest $oAuthRequest
 */
class HoneycodeConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
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
