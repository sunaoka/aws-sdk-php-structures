<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property 'oauth-client-credentials'|'oauth-3lo'|'api-key'|'bearer-token'|'custom-headers' $authorizationMethod
 */
class RegisteredGrafanaServerDetails extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     authorizationMethod: 'oauth-client-credentials'|'oauth-3lo'|'api-key'|'bearer-token'|'custom-headers'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
