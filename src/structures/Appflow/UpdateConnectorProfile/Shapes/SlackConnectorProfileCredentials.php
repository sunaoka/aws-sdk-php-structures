<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string $accessToken
 * @property ConnectorOAuthRequest $oAuthRequest
 */
class SlackConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
     *     accessToken?: string,
     *     oAuthRequest?: ConnectorOAuthRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
