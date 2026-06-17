<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $endpoint
 * @property string|null $description
 * @property 'oauth-client-credentials'|'api-key'|'bearer-token' $authorizationMethod
 * @property string|null $apiKeyHeader
 */
class RegisteredRemoteAgentDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     endpoint: string,
     *     description?: string|null,
     *     authorizationMethod: 'oauth-client-credentials'|'api-key'|'bearer-token',
     *     apiKeyHeader?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
