<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $endpoint
 * @property 'oauth-client-credentials'|'oauth-3lo'|'api-key'|'bearer-token' $authorizationMethod
 * @property string|null $description
 * @property string|null $apiKeyHeader
 */
class RegisteredMCPServerDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     endpoint: string,
     *     authorizationMethod: 'oauth-client-credentials'|'oauth-3lo'|'api-key'|'bearer-token',
     *     description?: string|null,
     *     apiKeyHeader?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
