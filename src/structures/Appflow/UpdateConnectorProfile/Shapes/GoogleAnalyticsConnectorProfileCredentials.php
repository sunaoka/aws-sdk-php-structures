<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string|null $accessToken
 * @property string|null $refreshToken
 * @property ConnectorOAuthRequest|null $oAuthRequest
 */
class GoogleAnalyticsConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
     *     accessToken?: string|null,
     *     refreshToken?: string|null,
     *     oAuthRequest?: ConnectorOAuthRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
