<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHENTICATION_FAILURE'|'STREAM_AUTHORIZATION_FAILURE'|'DISCOVERY_FAILURE'|'STREAM_LIMIT_EXCEEDED'|'STREAM_DISCONNECTED'|'RECORDING_FAILURE'|'NO_HEALTH_DATA' $Code
 * @property string $Message
 */
class HealthIssue extends Shape
{
    /**
     * @param array{
     *     Code: 'AUTHENTICATION_FAILURE'|'STREAM_AUTHORIZATION_FAILURE'|'DISCOVERY_FAILURE'|'STREAM_LIMIT_EXCEEDED'|'STREAM_DISCONNECTED'|'RECORDING_FAILURE'|'NO_HEALTH_DATA',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
