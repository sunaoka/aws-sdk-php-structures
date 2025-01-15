<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string|null $accessToken
 * @property ConnectorOAuthRequest|null $oAuthRequest
 */
class ZendeskConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
     *     accessToken?: string|null,
     *     oAuthRequest?: ConnectorOAuthRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
