<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $endpoint
 * @property 'oauth-client-credentials'|'oauth-3lo'|'api-key'|'bearer-token'|'custom-headers' $authorizationMethod
 * @property string|null $description
 * @property string|null $apiKeyHeader
 * @property list<string>|null $customHeaderNames
 */
class RegisteredMCPServerDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     endpoint: string,
     *     authorizationMethod: 'oauth-client-credentials'|'oauth-3lo'|'api-key'|'bearer-token'|'custom-headers',
     *     description?: string|null,
     *     apiKeyHeader?: string|null,
     *     customHeaderNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
